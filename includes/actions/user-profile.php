<?php
    if ( !defined('ACTION_LOAD') ) { die ( header('Location: /not-found') ); }
    
	if ( isset($_POST['submit-email']) ) {

        //Verify if there is not an user with the same email, also confirm is not the same user
		if(get_lender_by_email($_POST['email']) && get_lender_by_email($_POST['email'])['eth_ronin_address']!=$lender['eth_ronin_address']) {
			$form_error = 'The email address is already in use.';
		}

		if(!is_email($_POST['email'])) {
			$form_error = 'The email address entered is not valid.';
        }

		if(empty($_POST['email'])) {
			$form_error = 'Please enter a new email address.';
        }

        if(empty($form_error)) { 
            if(update_lender_email($_POST['email'], $lender['eth_ronin_address'])) {
                $form_success = 'Great! Your email was updated.';
                header("Refresh:2");
            }
            else {
                $form_error = 'An error occured, please try again later.';
            }
        }

    }
?>