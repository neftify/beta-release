<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }
?>
<div id="app">
    <div class="relative bg-gray-50 overflow-hidden">
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
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="/" aria-label="Home"> <img class="h-8 w-auto sm:h-10" src="/front-end/images/Neftify-opy.png" alt="" /></a>

                            <div class="-mr-2 flex items-center md:hidden"></div>
                        </div>
                    </div>
                    <div class="hidden md:flex md:space-x-10">
                        <a class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out" href="/about">About</a>
                        <a class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out" href="https://medium.com/neftify" target="_blank">Medium</a>
                        <a class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out" href="/what-is-play-to-earn">What is P2E?</a>
                    </div>
                </nav>
            </div>
            <div class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right">
                <div class="rounded-lg shadow-md">
                    <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/v1/workflow-mark-on-white.svg" alt="" />
                            </div>

                            <div class="-mr-2">
                                <button
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                    type="button"
                                    aria-label="Close menu"
                                >
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3">
                            <a
                                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out"
                                href="/about"
                                role="menuitem"
                            >
                                About
                            </a>
                            <a
                                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out"
                                href="https://medium.com/neftify"
                                role="menuitem"
                                target="_blank"
                            >
                                Medium
                            </a>
                            <a
                                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out"
                                href="/what-is-play-to-earn"
                                role="menuitem"
                            >
                                What is P2E?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
                <div class="text-center">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        <span class="mr-1">Lend game NFTs and </span>
                        <br class="xl:hidden" />
                        <span class="text-indigo-600">earn a share of rewards.</span>
                    </h2>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Neftify crowdsources game NFTs and loans them to players. Lenders earn a share of play-to-earn rewards, while players are able to participate in the decentralized game economy.
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <?php
                  if($lender) {
                ?>
                        <div class="rounded-md shadow">
                            <a
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10"
                                href="/dashboard"
                            >
                                Dashboard
                            </a>
                        </div>
                        <?php
                  }
                  else {
                ?>
                        <div class="rounded-md shadow">
                            <button
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10"
                                v-on:click="logInOut"
                            >
                                Connect Wallet
                            </button>
                        </div>
                        <?php
                  }
                ?>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10"
                                href="/what-is-play-to-earn"
                            >
                                What is P2E?
                            </a>
                        </div>
                    </div>

                    <div v-show="state == 'needLogInToMetaMask' || state == 'signTheMessage' || state == 'loggedIn'" class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md bg-blue-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            fill-rule="evenodd"
                                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-bg leading-5 font-medium text-blue-800">Hey!!</h3>
                                    <div class="mt-2 text-sm leading-5 text-blue-700">
                                        <p></p>
                                        <div v-show="state == 'needLogInToMetaMask'">
                                            Log in to your wallet account first!
                                        </div>
                                        <div v-show="state == 'signTheMessage'">
                                            Sign the message with your connected wallet to authenticate
                                        </div>
                                        <div v-show="state == 'loggedIn'">
                                            Successful authentication for address:<br />
                                            {{ ethAddress }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">Market Overview</h2>
            </div>
        </div>
        <div class="mt-10 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500" id="item-1">TVL</dt>
                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600" aria-describedby="item-1">$<?php echo get_current_axie_tvl_with_commas(); ?></dd>
                            </div>
                            <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">APY</dt>
                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600"><?php echo get_current_axie_lender_apy(); ?>%</dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Total Borrowers</dt>
                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600"><?php echo get_current_axie_borrowers_with_commas(); ?></dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
