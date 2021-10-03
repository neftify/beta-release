<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo seo_title($seo); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php print_seo($seo); ?>

    <link rel="stylesheet" href="/front-end/css/tailwind/tailwind.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/front-end/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/front-end/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/front-end/favicons/favicon-16x16.png">
    <link rel="manifest" href="/front-end/favicons/site.webmanifest">
    <link rel="mask-icon" href="/front-end/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/front-end/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/front-end/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <style>
        #email-error {
	        position: relative;
	        left: 100px;
	        right: 0;
	        bottom: 0;
	        font-family: 'Montserrat';
	        font-size: 13px;
	        font-weight: 500;
	        color: #FF3333;
        }
        #chimp-email-error {
	        position: relative;
	        left: 0;
	        right: 0;
	        bottom: 0;
	        vertical-align: middle;
	        font-family: 'Montserrat';
	        font-size: 13px;
	        font-weight: 500;
	        color: red;
        }
    </style>

  </head>
  <body class="antialiased bg-body text-body font-body">

    <?php
      if($user_footer_header) {
    ?>
      <div class="h-screen flex overflow-hidden bg-gray-100">
    <?php
      }
    ?>




