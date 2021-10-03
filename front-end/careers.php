<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $header_top_menu = array(
        0 => array( "url" => "#", "text" => "Company"),
        1 => array( "url" => "#", "text" => "Careers")
    );
    require_once 'header-top-menu.php';
?>
<div class="bg-white">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
          <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
            <span class="mr-1">Join us.</span>
            <br class="hidden sm:inline"><span class="text-indigo-600" id="newsletter-headline">Help build the future of how people earn.</span>
          </h2>
        </div>
      </div>
