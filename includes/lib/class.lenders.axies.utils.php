<?php

    function get_lender_axie_amount($address) {
        return get_axie_asset('count', array(
            0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $address)
        ));
    }

?>