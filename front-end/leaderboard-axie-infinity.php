<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $header_top_menu = array(
        0 => array( "url" => "#", "text" => "Leaderboard"),
        1 => array( "url" => "#", "text" => "Axie Infinity")
    );

    // Get Last Updated Date
    $input = get_setting(21);
    $oDate = gmdate("Y-m-d H:i:s", $input);

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
            <p class="text-base text-center leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Leaderboard</p>
            <h1 class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">Axie Infinity</h1>
            <p class="text-xl text-gray-500 leading-8">
                Neftify's Leaderboard represents the top 10 best players in the club for the month. Being a top 10 player earns you special perks, additional rewards, and private access to the Leaderboard Lounge. Furthermore, Leaderboard
                players are reserved Neftify's best Axies for participating in intramural and inter-community eSports competitions.
            </p>
        </div>
        <div class="prose prose-lg text-gray-500 mx-auto"></div>
    </div>
</div>

<div class="relative py-16 bg-white overflow-hidden">
    <div class="relative px-4 sm:px-6 lg:px-8">
        <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <li class="col-span-1 flex items-center bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden">
                <div class="flex-shrink-0 flex items-center justify-center w-16 h-16 text-white text-center text-sm leading-5 font-medium bg-pink-600" style="background: #000 !important;">TIER 1</div>
                <div class="flex-1 px-4 py-2 truncate">
                    <a class="text-gray-900 text-sm leading-5 font-medium hover:text-gray-600 transition ease-in-out duration-150" href="#">Elite (TOP 1-3)</a>
                    <p class="text-sm leading-5 text-gray-500">EARN 100% OF SLP GENERATED</p>
                </div>
            </li>
            <li class="col-span-1 flex items-center bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden">
                <div class="flex-shrink-0 flex items-center justify-center w-16 h-16 text-white text-center text-sm leading-5 font-medium bg-purple-600" style="background: #05007e !important;">TIER 2</div>
                <div class="flex-1 px-4 py-2 truncate">
                    <a class="text-gray-900 text-sm leading-5 font-medium hover:text-gray-600 transition ease-in-out duration-150" href="#">Advanced (TOP 4-5)</a>
                    <p class="text-sm leading-5 text-gray-500">EARN 80% OF SLP GENERATED</p>
                </div>
            </li>
            <li class="col-span-1 flex items-center bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden">
                <div class="flex-shrink-0 flex items-center justify-center w-16 h-16 text-white text-center text-sm leading-5 font-medium bg-orange-500" style="background: #8580e0 !important;">TIER 3</div>
                <div class="flex-1 px-4 py-2 truncate">
                    <a class="text-gray-900 text-sm leading-5 font-medium hover:text-gray-600 transition ease-in-out duration-150" href="#">Professional (TOP 6-7)</a>
                    <p class="text-sm leading-5 text-gray-500">EARN 70% OF SLP GENERATED</p>
                </div>
            </li>
            <li class="col-span-1 flex items-center bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden">
                <div class="flex-shrink-0 flex items-center justify-center w-16 h-16 text-white text-center text-sm leading-5 font-medium bg-green-400" style="background: #ccc !important;">TIER 4</div>
                <div class="flex-1 px-4 py-2 truncate">
                    <a class="text-gray-900 text-sm leading-5 font-medium hover:text-gray-600 transition ease-in-out duration-150" href="#">Rising (TOP 8-10)</a>
                    <p class="text-sm leading-5 text-gray-500">EARN 60% OF SLP GENERATED</p>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="relative py-16 bg-white overflow-hidden">
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul>
    <?php 
        $json = json_decode(get_setting(27), true);

        foreach($json as $id => $player) { 
            $id++; // So we can start with 1 
            
            if($id<=3) { 
                $tier = 'Elite'; 
                $background = '#000'; 
                $color = '#fff'; 
            } 
            elseif($id<=5) { 
                $tier = 'Advanced'; 
                $background = '#05007e'; 
                $color = '#fff'; 
            } 
            elseif($id<=7) { 
                $tier = 'Professional'; 
                $background = '#8580e0'; 
                $color = '#000'; 
            } 
            else { 
                $tier = 'Rising'; 
                $background = '#ccc'; 
                $color = '#000'; 
            } 
    ?>
                <li>
                    <a class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out" href="#" style="background: <?php echo $background; ?> !important;">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">
                                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                    <div>
                                        <div class="text-sm leading-5 font-medium text-indigo-600 truncate"><?php echo "$tier #$id"; ?></div>
                                        <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                            <span class="truncate" style="color: <?php echo $color; ?> !important;">Scholar #<?php echo $player['id']; ?></span>
                                        </div>
                                    </div>
                                    <div class="hidden md:block">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-900" style="color: <?php echo $color; ?> !important;">Total SLP Earned This Month</div>
                                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <img src="/front-end/images/SLP.png" width="20px" height="20px" alt="SLP" />
                                                </svg>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <span style="color: <?php echo $color; ?> !important;"><?php echo $player['total_slp']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <?php
        }
    ?>
            </ul>
        </div>

        <p style="margin: 10px; font-size: 10px;">
            *Last update at <?php echo $oDate; ?> GMT.
        </p>
    </div>
</div>
