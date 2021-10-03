<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

  /*
  Example of how to use the menu
  
  $header_top_menu = array(
    0 => array( "url" => "", "text" => ""),
    1 => array()
  );
  require_once 'header-top-menu.php';
  */
?>

<nav class="flex" aria-label="Breadcrumb" style="margin-bottom: 10px;">
  <ol class="bg-white rounded-md shadow px-6 flex space-x-4">
    <li class="flex">
      <div class="flex items-center">
        <a class="text-gray-400 hover:text-gray-500" href="/">
          <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg><span class="sr-only">Home</span>
        </a>
      </div>
    </li>
    <li class="flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewbox="0 0 24 44" preserveaspectratio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path></svg><a class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" href="<?php echo $header_top_menu[0]['url']; ?>"><?php echo $header_top_menu[0]['text']; ?></a>
      </div>
    </li>
    <li class="flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewbox="0 0 24 44" preserveaspectratio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path></svg><a class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" href="<?php echo $header_top_menu[1]['url']; ?>" aria-current="page"><?php echo $header_top_menu[1]['text']; ?></a>
      </div>
    </li>
  </ol>
</nav>