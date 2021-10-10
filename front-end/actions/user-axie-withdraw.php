<?php
    if ( !defined('ACTION_LOAD') ) { die ( header('Location: /not-found') ); }
    
    // Did he already submited a request
    $request_for_withdraw = get_axie_withdraw('count', array(
        0 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "eth_ronin_address", "command" => "=", "value" => $lender_eth_address),
        1 => array("type" => "CHR", "condition" => "AND", "loose" => false, "table" => "status", "command" => "=", "value" => 'PENDING'),
    ));

    // Are Axies locked false = no, true = yes
    $are_axies_locked = are_axies_locked($lender['axie_lock_period']);

	if ( isset($_POST['withdraw-axie']) && $request_for_withdraw<=0 && !$are_axies_locked ) {

        if(empty($form_error)) { 
            if(new_axie_withdraw($lender_eth_address)) {
                $form_success = 'Great! Your Axie withdraw was submitted.';
            }
            else {
                $form_error = 'An error occured, please try again later.';
            }
        }

    }
?>