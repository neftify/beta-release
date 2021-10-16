<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $header_top_menu = array(
        0 => array( "url" => "#", "text" => "Individuals"),
        1 => array( "url" => "#", "text" => "Become a player")
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
                        <span class="mr-1" data-config-id="01_part1">Become a</span>
                        <br class="xl:hidden" />
                        <span class="text-indigo-600" data-config-id="01_part2">Neftify Player</span>
                    </h2>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl" data-config-id="01_desc">Participate in the metaverse, crypto, and the new labor economy.</p>
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

    <section data-section-id="7" data-category="ma-se-blog" data-component-id="20e5a82b_02_awz" data-custom-component-id="106217">
        <div class="py-20 bg-gray-50 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="mb-16 max-w-md text-center mx-auto">
                    <span class="text-indigo-600 font-bold">HOW IT WORKS</span>
                    <h2 class="text-4xl lg:text-5xl font-bold font-heading">Borrow NFTs and earn yield.</h2>
                </div>
                <div class="relative flex flex-wrap -mx-4 z-0">
                    <div class="hidden lg:block absolute inset-x-0 max-w-2xl xl:max-w-3xl mx-auto py-px rounded bg-indigo-600" style="top: 10%; z-index: -1;"></div>
                    <div class="mb-8 w-full lg:w-1/3 px-4 text-center">
                        <span class="relative mb-6 lg:mb-10 mx-auto flex w-16 h-16 items-center justify-center bg-indigo-600 rounded-full text-white text-2xl">1</span>
                        <h3 class="mb-4 text-2xl font-bold font-heading">Join our discord.</h3>
                        <p class="text-gray-500 leading-loose">After you join our discord, you’ll get access to all the players resources.</p>
                    </div>
                    <div class="mb-8 w-full lg:w-1/3 px-4 text-center">
                        <span class="mb-4 lg:mb-10 mx-auto flex w-16 h-16 items-center justify-center bg-indigo-600 rounded-full text-white text-2xl">2</span>
                        <h3 class="mb-4 text-2xl font-bold font-heading">Borrow Axies.</h3>
                        <p class="text-gray-500 leading-loose">Follow the instructions, and Neftify will loan you Axies through a method called crowdsourced scholarships.</p>
                    </div>
                    <div class="w-full lg:w-1/3 px-4 text-center">
                        <span class="mb-4 lg:mb-10 mx-auto flex w-16 h-16 items-center justify-center bg-indigo-600 rounded-full text-white text-2xl">3</span>
                        <h3 class="mb-4 text-2xl font-bold font-heading">Earn yield.</h3>
                        <p class="text-gray-500 leading-loose">Players that join Neftify and borrow Axies get to keep <?php echo get_current_axie_player_rate_in_percentage(); ?>% of their earnings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section-id="8" data-category="ma-se-blog" data-component-id="20e5a82b_02_awz" data-custom-component-id="106221">
        <div class="py-20 bg-gray-50 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                        <div class="max-w-md lg:mx-auto">
                            <span class="text-indigo-600 font-bold">BENEFITS</span>
                            <h2 class="my-2 text-4xl lg:text-5xl font-bold font-heading">Earn money with Neftify.</h2>
                            <p class="mb-6 text-gray-500 leading-loose">When you borrow your Axies from Neftify, you’ll earn <?php echo get_current_axie_player_rate_in_percentage(); ?>% of the SLP you generate.</p>
                            <ul class="text-gray-500 font-bold">
                                <li class="flex mb-4">
                                    <svg class="mr-2 w-6 h-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Payouts sent directly to your wallet.</span>
                                </li>
                                <li class="flex mb-4">
                                    <svg class="mr-2 w-6 h-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Low and fair SLP quotas.</span>
                                </li>
                                <li class="flex mb-4">
                                    <svg class="mr-2 w-6 h-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Get paid in SLP.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 flex flex-wrap -mx-4">
                        <div class="mb-8 lg:mb-0 w-full md:w-1/2 px-4">
                            <div class="mb-8 py-6 pl-6 pr-4 shadow rounded bg-white">
                                <span class="mb-4 inline-block p-3 rounded-lg bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Neftify Rewards.</h4>
                                <p class="text-gray-500 leading-loose">Gain access to rewards like leaderboard compensation, lottery, and weekly giveaways.</p>
                            </div>
                            <div class="py-6 pl-6 pr-4 shadow rounded bg-white">
                                <span class="mb-4 inline-block p-3 rounded bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Earn income.</h4>
                                <p class="text-gray-500 leading-loose">Receive <?php echo get_current_axie_player_rate_in_percentage(); ?>% of your earned SLP for as long as you meet the quota.</p>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 lg:mt-20 px-4">
                            <div class="mb-8 py-6 pl-6 pr-4 shadow rounded-lg bg-white">
                                <span class="mb-4 inline-block p-3 rounded bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Access to training on Discord.</h4>
                                <p class="text-gray-500 leading-loose">Get access to a network of coach and trainers.</p>
                            </div>
                            <div class="py-6 pl-6 pr-4 shadow rounded-lg bg-white">
                                <span class="mb-4 inline-block p-3 rounded bg-indigo-100">
                                    <svg class="w-10 h-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                    </svg>
                                </span>
                                <h4 class="mb-2 text-2xl font-bold font-heading">Help pioneer the metaverse.</h4>
                                <p class="text-gray-500 leading-loose">Participate in Axie economy by borrowing assets, and contribute building the metaverse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div data-section-id="9" data-category="ma-se-stats" data-component-id="36b100eb_03_awz" data-custom-component-id="106223" class="relative bg-white">
        <div class="h-56 bg-indigo-600 sm:h-72 lg:absolute lg:left-0 lg:h-full lg:w-1/2">
            <img class="w-full h-full object-cover" src="/front-end/images/Purple-Glow-N-Logo-Big-Background-Light.png" alt="" />
        </div>

        <div class="relative max-w-screen-xl mx-auto px-4 py-8 sm:py-12 sm:px-6 lg:py-16">
            <div class="max-w-2xl mx-auto lg:max-w-none lg:mr-0 lg:ml-auto lg:w-1/2 lg:pl-10">
                <h2 class="mt-6 text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">Trusted by players and lenders worldwide.</h2>
                <p class="mt-6 text-lg leading-7 text-gray-500">We use industry-leading security practices to keep your deposits safe. All assets are kept in cold storage wallets maintained by both co-founders.</p>
                <div class="mt-8 overflow-hidden">
                    <dl class="-mx-8 -mt-8 flex flex-wrap">
                        <div class="flex flex-col px-8 pt-8">
                            <dt class="order-2 text-base leading-6 font-medium text-gray-500">Players</dt>
                            <dd class="order-1 text-2xl leading-8 font-extrabold text-indigo-600 sm:text-3xl sm:leading-9"><?php echo get_current_axie_borrowers_with_commas(); ?></dd>
                        </div>
                        <div class="flex flex-col px-8 pt-8">
                            <dt class="order-2 text-base leading-6 font-medium text-gray-500">Axies Loaned</dt>
                            <dd class="order-1 text-2xl leading-8 font-extrabold text-indigo-600 sm:text-3xl sm:leading-9"><?php echo get_current_axie_in_pool_with_commas(); ?></dd>
                        </div>
                        <div class="flex flex-col px-8 pt-8">
                            <dt class="order-2 text-base leading-6 font-medium text-gray-500">Total Value Locked</dt>
                            <dd class="order-1 text-2xl leading-8 font-extrabold text-indigo-600 sm:text-3xl sm:leading-9">$<?php echo get_current_axie_tvl_with_commas(); ?></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div data-section-id="10" data-category="ma-se-cta" data-component-id="024ec2c5_02_awz" class="bg-gray-50">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                <span data-config-id="01_part1">Ready to start earning money?</span>
                <br />
                <span class="text-indigo-600" data-config-id="01_part2">Become a Neftify Player.</span>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <div class="inline-flex rounded-md shadow">
                    <a
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out"
                        href="<?php echo get_main_discord_link(); ?>"
                        data-config-id="01_primary-action"
                    >
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

