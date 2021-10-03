<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    // Get user Axie count
    $axie_lender_amount = get_axie_asset('count', array(
        0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $lender_ronin_address)
    ));

    // Get full pool amount
    $axie_pool_amount = get_axie_asset('count', array());

    // Lets get the current APY
    $APY = get_setting(13);

    // Lets get the last interval SLP amount
    $last_interaval_slp = get_setting(23);

    // Lets get the lender 24 hours earning
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
    $lender_24_earning = 0;

        // Lets get the last interval pool data
        $last_interval_data = get_intervals('one', array(), "ORDER BY id_interval DESC LIMIT 1");

        $last_interval_id = $last_interval_data['id_interval'];
        $slp_generated_in_interval = $last_interval_data['slp_generated_in_interval'];
        $axies_on_pool_in_interval = $last_interval_data['axies_on_pool_in_interval'];
        $lenders_rate_in_interval = $last_interval_data['lenders_rate_in_interval'];

        // Lets get the Axies the lender had on the last interval

        $lender_axie_last_interval = get_axie_records('one', array(
            0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $lender_eth_address),
            1 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "id_current_interval", "command" => "=", "value" => $last_interval_id)
        ), "ORDER BY id_record DESC LIMIT 1");

        if(!empty($lender_axie_last_interval['amount'])) {
            $lender_24_earning = ( ( $lender_axie_last_interval['amount'] / $axies_on_pool_in_interval ) * $lenders_rate_in_interval ) * $last_interaval_slp;
            $lender_24_earning = round($lender_24_earning, -1);
        }

    require_once 'user-side-menu.php';
?>
<div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
        <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
            <svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
        <div class="pt-2 pb-6 md:py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="py-4">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="flex-1 min-w-0">
                            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">Axie Infinity</h2>
                        </div>
                        <div class="mt-4 flex md:mt-0 md:ml-4">
                            <?php
                                    if($axie_lender_amount>0) { ?>
                            <span class="shadow-sm rounded-md">
                                <a
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50 transition duration-150 ease-in-out"
                                    href="/dashboard-withdraw"
                                >
                                    Withdraw
                                </a>
                            </span>
                            <?php
                                    }
                                ?>
                            <span class="ml-3 shadow-sm rounded-md">
                                <a
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out"
                                    href="/dashboard-deposit"
                                >
                                    Deposit
                                </a>
                            </span>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Pool Stats</h3>
                        <div class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
                            <div>
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-base leading-6 font-normal text-gray-900">My Axies</dt>
                                        <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                            <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                <span><?php echo number_format($axie_lender_amount);?></span>
                                                <span class="ml-2 text-sm leading-5 font-medium text-gray-500">
                                                    of
                                                    <?php echo number_format($axie_pool_amount); ?>
                                                    in pool
                                                </span>
                                            </div>
                                            <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium leading-5 bg-gray-100 text-gray-800 md:mt-2 lg:mt-0">
                                                <span class="sr-only">Pool Ownership</span>
                                                <span class="ml-1"><?php echo round(($axie_lender_amount/$axie_pool_amount)*100, 2); ?>%</span>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 md:border-0 md:border-l">
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-base leading-6 font-normal text-gray-900">24h Pool Earnings</dt>
                                        <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                            <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                <span><?php echo number_format($last_interaval_slp); ?></span>
                                                <span class="ml-2 text-sm leading-5 font-medium text-gray-500">SLP</span>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 md:border-0 md:border-l">
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-base leading-6 font-normal text-gray-900">Variable APY</dt>
                                        <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                            <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                <span><?php echo $APY; ?>%</span>
                                                <span class="ml-2 text-sm leading-5 font-medium text-gray-500">Last 24h</span>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                if($axie_lender_amount>0) {
            ?>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h3 class="text-lg leading-6 font-medium text-gray-900">My Stats</h3>
                <div class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-2">
                    <div>
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-base leading-6 font-normal text-gray-900">My 24h Earnings</dt>
                                <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                    <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                        <span><?php echo $lender_24_earning; ?></span>
                                        <span class="ml-2 text-sm leading-5 font-medium text-gray-500">SLP</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 md:border-0 md:border-l">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-base leading-6 font-normal text-gray-900">Expected 30d Earnings*</dt>
                                <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                    <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                        <span><?php echo $lender_24_earning*30; ?></span>
                                        <span class="ml-2 text-sm leading-5 font-medium text-gray-500">SLP</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <p style="margin: 10px;font-size: 10px;">*This is an estimate based on your last 24 hours earnings.</p>
            </div>
            <?php
                }
            ?>
        </div>
    </main>
</div>
