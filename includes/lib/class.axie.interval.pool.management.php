<?php

    /**
     * Ex. APY test:
     * 
     * - ASt = [TODAY] = SLP generated on interval
     * - Rt = the price of SLP in USD is 0.0732 at the time of cron job
     * - PCt = the lender's cut is set to 25% at time of cron job
     * - TPVt = the pool's total axie value in USD is 81,204 at the time of cron job
     * 
     * APY = 100 x ( 1 + ( ASt x Rt x PCt x 365 ) / TVPt − 1 )
     * APY = 100 x ( 1 + ( 9230 × 0.0732 × 0.25 × 365 ) / 81204 - 1 )
     * APY = 75.92%
     * 
     */
    function update_axie_lender_apy() {
        $ASt = get_setting(23); // SLP Generated on interval
        $Rt  = get_setting(14); // Current SLP price
        $PCt = get_setting(17); // Current Lenders % cut
        $TPVt = get_setting(24); // Total Axie USD Value on Pool
    
        $APY = 100 * ( 1 + ( $ASt * $Rt * $PCt * 365 ) / $TPVt - 1 );
        $APY = round($APY, 2);

        update_setting(13, $APY);
        new_record('Current Lender APY', $APY);
    }

    function update_axie_pool_tvl($eth) {
        $axie_tvl_pool = round($eth, 2);
        
        update_setting(26, $axie_tvl_pool);
        new_record('Current Axies TVL in The Pool in ETH', $axie_tvl_pool);

        // USD
        $axie_tvl_pool_usd = $axie_tvl_pool * get_setting(25);
        $axie_tvl_pool_usd = round($axie_tvl_pool_usd, 2);
        
        update_setting(24, $axie_tvl_pool_usd);
        new_record('Current Axies TVL in The Pool in USD', $axie_tvl_pool_usd);
    }

    function update_axie_slp_generated_yesterday() {
        $new_slp_last_interval = get_setting(23);
        update_setting(19, $new_slp_last_interval);
    }

    function update_axie_new_pool_amount() {
        $new_slp_pool_amount = get_setting(9) + get_setting(23);

        update_setting(9, $new_slp_pool_amount);
        new_record('Current SLP in the POOL', $new_slp_pool_amount);
    }

    function update_axie_slp_generated_pool_interval($amount) {
        update_setting(23, $amount);
        new_record('SLP Generated on Interval '.get_current_axie_pool_interval(), $amount);
    }

    // This is called every time a payment is made to the lender to reset its interval and keep track of the pool
    function update_lender_to_next_interval($address) {
        $new_interval = get_current_axie_pool_interval()+1;

        if(update_lender_interval($new_interval, $address)) {
            return true;
        }

        return false;
    }

    // This is called every time a cron is run and we start a new interval
    function update_axie_pool_to_next_interval() {
        $new_interval = get_current_axie_pool_interval()+1;

        update_setting(20, $new_interval);
        new_record('Starting Axie Infinity SLP Pool Interval '.$new_interval, time());
    }

    /*
        The pool uses intervals to calculate which part of the pool belongs to everyone.

        From the intervals we can know for example if we start at interval 2 and end at 6...

        Inverval | SLP in Pool | Pool Ownership (your axies/all axies) | SLP that belongs to lender = ( ( [POOL OWNERSHIP] ) x [LENDERS CUT] ) x [SLP IN POOL]

        2        | 100         |    1/10      | ( (0.1)  x 0.25 ) x 100 = 2.5 SLP
        3        | 300         |    1/20      | ( (0.05) x 0.25 ) x 300 = 3.75 SLP
        4        | 800         |    1/40      | ( (0.025)x 0.25 ) x 800 = 5 SLP
        5        | 1300        |    2/50      | ( (0.04) x 0.25 ) x 1300 = 13 SLP
        6        | 2000        |    5/100     | ( (0.05) x 0.25 ) x 2000 = 25 SLP

        Once calculated you will add it all up
            TOTAL SLP = 2.5 + 3.75 + 5 + 13 + 25 = 49.25 SLP

        On this example interval 2 is the starting point and interval 6 is the ending point

    */
    function get_lender_current_slp_in_pool($address) {
        $total_slp = 0;

        // Lets get the lender interval to see where he is at
        $start = get_lender_by_eth_address($address)['id_start_axie_pool_interval'];

        // Lets get the current pool interval
        $end = get_current_axie_pool_interval();

        // Lets get the user pool ownership per interval
        $user_pool_ownership = get_axie_records('all', array(
            0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $address),        
        ), "AND id_current_interval between '$start' AND '$end'");

        // Lets get the interval data for each period
        $interval_data = get_axie_pool_intervals('all', array(), "WHERE id_interval between '$start' AND '$end'");

        // Lets calculate the amount
        for($i=0; $i<count($interval_data); $i++) {
            // Lets check is the same interval
            if($user_pool_ownership[$i]['id_current_interval']!=$interval_data[$i]['id_interval']) {
                break;
            }

            $lender_axie_in_pool = $user_pool_ownership[$i]['amount'];

            $lender_rate  = $interval_data[$i]['lenders_rate_in_interval'];
            $slp_interval = $interval_data[$i]['slp_generated_in_interval'];
            $total_axie_in_pool = $interval_data[$i]['axies_on_pool_in_interval'];

            $lender_pool_ownership = ($lender_axie_in_pool/$total_axie_in_pool);

            $sum = (($lender_pool_ownership) * $lender_rate) * $slp_interval;

            $total_slp = $total_slp + $sum;
        }

        return $total_slp;
    }

    /*
        LAt = Lender's Axies at time of cron job
        TPAt = Total Pool Axies at time of cron job
        PCt = Lender's Cut at time of cron job
        ASt = 24h Pool Earnings
        
        My 24h Earnings = ( ( LAt / TPAt ) x PCt ) x ASt
        
        Ex: 
        LAt = 2
        TPAt = 458
        PCt = 25%
        ASt = 11,680
        
        My 24h Earnings = ( ( 2 / 458 ) x 0.25 ) x 11,680
        My 24h Earnings = ROUND(12.75, -1) 
        My 24h Earnings = 12
    */
    function get_lender_last_24_hours_pool_slp_generated($address) {
        $lender_24_earning = 0;

        // Lets get the last interval pool data
        $last_interval_data = get_axie_pool_intervals('one', array(), "ORDER BY id_interval DESC LIMIT 1");
            $last_interval_id = $last_interval_data['id_interval'];
            $slp_generated_in_interval = $last_interval_data['slp_generated_in_interval'];
            $axies_on_pool_in_interval = $last_interval_data['axies_on_pool_in_interval'];
            $lenders_rate_in_interval = $last_interval_data['lenders_rate_in_interval'];

        // Lets get the Axies the lender had on the last interval
        $lender_axie_last_interval = get_axie_records('one', array(
            0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $address),
            1 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "id_current_interval", "command" => "=", "value" => $last_interval_id)
        ), "ORDER BY id_record DESC LIMIT 1");

        if(!empty($lender_axie_last_interval['amount'])) {
            $lender_24_earning = ( ( $lender_axie_last_interval['amount'] / $axies_on_pool_in_interval ) * $lenders_rate_in_interval ) * get_axie_slp_generated_last_interval();
            $lender_24_earning = round($lender_24_earning, -1);
        }

        return $lender_24_earning;
    }

    function get_axie_slp_generated_last_interval_with_commas() {
        return number_format(get_setting(23));
    }

    function get_axie_slp_generated_last_interval() {
        return get_setting(23);
    }

    function get_current_axie_borrowers_with_commas() {
        return number_format(get_current_axie_borrowers());
    }

    function get_current_axie_borrowers() {
        return get_setting(12);
    }

    function get_current_axie_tvl_with_commas() {
        return number_format(get_current_axie_tvl());
    }

    function get_current_axie_tvl() {
        return get_setting(24);
    }

    function get_current_axie_lender_apy() {
        return get_setting(13);
    }

    function get_current_axie_pool_interval() {
        return get_setting(20);
    }

    function add_new_axie_pool_interval_data() {
        // $slp_generated_in_interval, $axies_on_pool_in_interval, $lenders_rate_in_interval, $players_rate_in_interval, $dao_rate_in_interval
        new_axie_pool_interval(get_setting(23), get_setting(10), get_setting(17), get_setting(18), get_setting(16));

        new_record('Ending Interval '.get_current_axie_pool_interval(), time());
    }
?>