<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }
?>
<div class="hidden">
        <div class="fixed inset-0 flex z-40">
            <div class="fixed inset-0">
                <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white">
                <div class="absolute top-0 right-0 -mr-14 p-1">
                    <button class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar">
                        <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex-shrink-0 flex items-center px-4">
                        <a href="/"><img class="h-8 w-auto" src="/front-end/images/Neftify-opy.png" alt="" /></a>
                    </div>

                    <nav class="mt-5 px-2">
                        <a class="group flex items-center px-2 py-2 text-base leading-6 font-medium <?php is_this_menu_active('/dashboard', $request); ?> rounded-md focus:outline-none transition ease-in-out duration-150" href="/dashboard">
                            <svg class="mr-4 h-6 w-6 text-gray-500 group-hover:text-gray-500 group-focus:text-gray-600 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                ></path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                        <a
                            class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium <?php is_this_menu_active('/dashboard-markets', $request); ?> rounded-md hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150"
                            href="/dashboard-markets"
                        >
                            <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                ></path>
                            </svg>
                            <span>Markets</span>
                        </a>
                        <a
                            class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium <?php is_this_menu_active('/dashboard-payouts', $request); ?> rounded-md hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150"
                            href="/dashboard-payouts"
                        >
                            <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Payouts</span>
                        </a>
                        <a
                            class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium <?php is_this_menu_active('/dashboard-profile', $request); ?> rounded-md hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150"
                            href="/dashboard-profile"
                        >
                            <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                                ></path>
                            </svg>
                            <span>Profile</span>
                        </a>
                        <a
                            class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium <?php is_this_menu_active('/dashboard-profile', $request); ?> rounded-md hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150"
                            href="/logout"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                            <span>Logout</span>
                        </a>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                    <a class="flex-shrink-0 group block focus:outline-none" href="/dashboard-profile">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-base leading-6 font-medium text-gray-700 group-hover:text-gray-900"><?php echo get_first_address_hidden($lender_eth_address); ?></p>
                                <p class="text-sm leading-5 font-medium text-gray-500 group-hover:text-gray-700 group-focus:underline transition ease-in-out duration-150">View profile</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex-shrink-0 w-14"></div>
        </div>
    </div>
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64 border-r border-gray-200 bg-white">
            <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4">
                    <a href="/"><img class="h-8 w-auto" src="/front-end/images/Neftify-opy.png" alt="" /></a>
                </div>

                <nav class="mt-5 flex-1 px-2 bg-white">
                    <a
                        class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium <?php is_this_menu_active('/dashboard', $request); ?> rounded-md hover:text-gray-900 focus:outline-none transition ease-in-out duration-150"
                        href="/dashboard"
                    >
                        <svg class="mr-3 h-6 w-6 text-gray-500 group-hover:text-gray-500 group-focus:text-gray-600 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            ></path>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <a
                        class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium <?php is_this_menu_active('/dashboard-markets', $request); ?> rounded-md hover:text-gray-900 focus:outline-none transition ease-in-out duration-150"
                        href="/dashboard-markets"
                    >
                        <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                            ></path>
                        </svg>
                        <span>Markets</span>
                    </a>

                    <a
                        class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium <?php is_this_menu_active('/dashboard-payouts', $request); ?> rounded-md hover:text-gray-900 focus:outline-none transition ease-in-out duration-150"
                        href="/dashboard-payouts"
                    >
                        <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Payouts</span>
                    </a>

                    <a
                        class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium <?php is_this_menu_active('/dashboard-profile', $request); ?> rounded-md hover:text-gray-900 focus:outline-none transition ease-in-out duration-150"
                        href="/dashboard-profile"
                    >
                        <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Profile</span>
                    </a>
                    <a
                        class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium <?php is_this_menu_active('/logout', $request); ?> rounded-md hover:text-gray-900 focus:outline-none transition ease-in-out duration-150"
                        href="/logout"
                    >
                        <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span>Logout</span>
                    </a>
                </nav>
            </div>
            <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                <a class="flex-shrink-0 group block" href="/dashboard-profile">
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-gray-700 group-hover:text-gray-900"><?php echo get_first_address_hidden($lender_eth_address); ?></p>
                            <p class="text-xs leading-4 font-medium text-gray-500 group-hover:text-gray-700 transition ease-in-out duration-150">View profile</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>