<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $header_top_menu = array(
        0 => array( "url" => "#", "text" => "Markets"),
        1 => array( "url" => "#", "text" => "Helium")
    );
    require_once 'header-top-menu.php';
?>
<div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect class="text-gray-200" x="0" y="0" width="4" height="4" fill="currentColor"></rect></pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"></rect>
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect class="text-gray-200" x="0" y="0" width="4" height="4" fill="currentColor"></rect></pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"></rect>
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect class="text-gray-200" x="0" y="0" width="4" height="4" fill="currentColor"></rect></pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"></rect>
            </svg>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto mb-6">
            <p class="text-base text-center leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Markets<sup class="text-red-500">Solana</sup></p>
            <h1 class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">Helium</h1>
            <p class="text-center text-xl text-gray-500 leading-8">This market is currently paused. Reason: <b>Still being kickstarted</b>.</p>
        </div>
        <div class="prose prose-lg text-gray-500 mx-auto"></div>
    </div>
</div>

<div>
    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3" style="margin: 20px;">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dl>
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">No. of Borrowers</dt>
                    <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">1</dd>
                </dl>
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dl>
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">APY</dt>
                    <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">0%</dd>
                </dl>
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dl>
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">TVL</dt>
                    <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">$948</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
