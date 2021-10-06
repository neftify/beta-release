<?php

    function get_token_price($api_id) {
        $api = "https://api.coingecko.com/api/v3/simple/price?ids=$api_id&vs_currencies=usd";

        $json = file_get_contents($api);
        $json = json_decode($json, true);
        return $json[$api_id]['usd'];
    }

    function update_eth_price() {
        $price = get_token_price('ethereum');

        update_setting(25, $price);
        new_record('Current ETH Price from Coingecko', $price);
    }

    function update_slp_price() {
        $price = get_token_price('smooth-love-potion');

        update_setting(14, $price);
        new_record('Current SLP Price from Coingecko', $price);
    }

?>