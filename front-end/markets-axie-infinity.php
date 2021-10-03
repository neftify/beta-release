<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $header_top_menu = array(
        0 => array( "url" => "#", "text" => "Markets"),
        1 => array( "url" => "#", "text" => "Pools")
    );
    require_once 'header-top-menu.php';
?>
<div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Axie Infinity</h3>
      </div>
    
      <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900" style="margin: 20px;">Last 30 days</h3>
        <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3" style="margin: 20px;">
          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6"><dl><dt class="text-sm leading-5 font-medium text-gray-500 truncate">No. of Borrowers</dt><dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900"><?php echo number_format(get_setting(12)); ?></dd></dl></div>
          </div>
          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6"><dl><dt class="text-sm leading-5 font-medium text-gray-500 truncate">APY</dt><dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900"><?php _setting(13); ?>%</dd></dl></div>
          </div>
          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6"><dl><dt class="text-sm leading-5 font-medium text-gray-500 truncate">TVL</dt><dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">$<?php echo number_format(get_setting(24)); ?></dd></dl></div>
          </div>
        </div>
      </div>