<?php

    function pay_lender_slp($address, $amount) {
        $id_lender = get_lender_by_address($address)['id_lender'];

        if(new_payment($address, $id_lender, 0, get_current_axie_pool_interval(), 'PAID', $amount, 'SLP')) {
            if(update_lender_to_next_interval($address)) {
                return true;
            }
        }
        return false;
    }

    function get_lender_payment_slp_amount($address) {
        return get_lender_current_slp_in_pool($address);
    }
?>