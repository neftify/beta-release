<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $header_top_menu = array(
        0 => array( "url" => "#", "text" => "Individuals"),
        1 => array( "url" => "#", "text" => "Neftify Rewards")
    );
    require_once 'header-top-menu.php';
?>
<div class="relative bg-gray-50 overflow-hidden">
    <div data-section-id="6" data-category="ma-se-heroes" data-component-id="2a9d3749_01_awz" class="relative bg-gray-50 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
            <div class="relative h-full max-w-screen-xl mx-auto">
                <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewbox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternunits="userSpaceOnUse"><rect class="text-gray-200" x="0" y="0" width="4" height="4" fill="currentColor"></rect></pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"></rect>
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewbox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternunits="userSpaceOnUse"><rect class="text-gray-200" x="0" y="0" width="4" height="4" fill="currentColor"></rect></pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"></rect>
                </svg>
            </div>
        </div>
        <div class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
                <div class="text-center">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        <span class="mr-1" data-config-id="01_part1">Neftify</span>
                        <br class="xl:hidden" />
                        <span class="text-indigo-600" data-config-id="01_part2">Rewards</span>
                    </h2>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl" data-config-id="01_desc">Neftify Rewards is a program exclusively for members of the Neftify Community. By becoming a player or joining the Discord, you gain access to rewards like leaderboard rewards, lottery, and weekly giveaways.</p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10"
                                href="<?php echo get_main_discord_link(); ?>"
                                data-config-id="01_primary-action"
                            >
                                Become a Player
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <section data-section-id="8" data-category="ma-se-blog" data-component-id="20e5a82b_02_awz" data-custom-component-id="106221">
        <div class="py-20 bg-gray-50 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                        <div class="max-w-md lg:mx-auto">
                            <span class="text-indigo-600 font-bold">BENEFITS</span>
                            <h2 class="my-2 text-4xl lg:text-5xl font-bold font-heading">Earn more rewards with Neftify.</h2>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 flex flex-wrap -mx-4">
                        <div class="mb-8 lg:mb-0 w-full md:w-1/2 px-4">
                            <div class="mb-8 py-6 pl-6 pr-4 shadow rounded bg-white">
                                <span class="mb-4 inline-block p-3 rounded-lg bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Giveaways</h4>
                                <p class="text-gray-500 leading-loose">Participate in weekly giveaways. <div class="mt-3 sm:mt-0 sm:ml-3" style="margin-top: 10px;"><a class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 transition duration-150 ease-in-out" href="<?php echo get_main_discord_link(); ?>" target="_blank">Join our Discord</a></div></p>
                            </div>
                            <div class="py-6 pl-6 pr-4 shadow rounded bg-white">
                                <span class="mb-4 inline-block p-3 rounded bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Lottery</h4>
                                <p class="text-gray-500 leading-loose">Earn tickets by playing and participate in big monthly prizes. <div class="mt-3 sm:mt-0 sm:ml-3" style="margin-top: 10px;"><a class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-gray-100 hover:text-indigo-600 hover:bg-gray-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 transition duration-150 ease-in-out" href="#">Coming Soon</a></div></p>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 lg:mt-20 px-4">
                            <div class="mb-8 py-6 pl-6 pr-4 shadow rounded-lg bg-white">
                                <span class="mb-4 inline-block p-3 rounded bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Leaderboard</h4>
                                <p class="text-gray-500 leading-loose">Earn more than <?php echo get_current_axie_player_rate_in_percentage(); ?>% by becoming part of the leaderboard. <div class="mt-3 sm:mt-0 sm:ml-3" style="margin-top: 10px;"><a class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 transition duration-150 ease-in-out" href="/leaderboard-axie-infinity">View Leaderboard</a></div></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

