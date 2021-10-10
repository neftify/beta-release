<?php

    function get_lender_axie_amount($address) {
        return get_axie_asset('count', array(
            0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $address)
        ));
    }

    function lock_axies($unix, $address) {
        if(update_lender_axie_lock_period($unix, $address)) {
            return true;
        }
        return false;
    }

    function are_axies_locked($unix) {
        $time = time();

        if($unix>$time) {
            return true;
        }
        return false;
    }

?>