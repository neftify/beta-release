<?php

	// menu function to identify the one we are located at 
	function is_this_menu_active($page, $current_page) {
		if($page==$current_page) {
			echo 'text-gray-900 bg-gray-100 hover:bg-gray-100 focus:bg-gray-200';
		}
		else {
			echo 'text-gray-600 hover:bg-gray-50 focus:bg-gray-100';
		}
	}

    function show_message() {
        global $form_success, $form_error, $form_info;

       if(!empty($form_success)) {
           $type = 'green';
           $message = $form_success;
       }
       elseif(!empty($form_info)) {
           $type = 'blue';
           $message = $form_info;
       }
       else {
           $type = 'red';
           $message = $form_error;
       }
   
       if(!empty($form_success) || !empty($form_error) || !empty($form_info)) {
?>
            <div class="bg-<?php echo $type; ?>-50 border-l-4 border-<?php echo $type; ?>-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-<?php echo $type; ?>-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm leading-5 text-<?php echo $type; ?>-700">
                            <span class="mr-1"><?php echo $message; ?></span>
                        </p>
                    </div>
                </div>
            </div>

<?php
        }
    }

?>