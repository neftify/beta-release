<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    // Get a random pool from the availables ones
    $json = json_decode(get_setting(15), true);
    $random_number = rand(0, count($json)-1); // because it starts at 0
    $pool = $json[$random_number];

    $pool_name = $pool['name'];
    $pool_address = $pool['address'];

    require_once 'user-side-menu.php';
?>
<div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
        <button
            id="show-mobile-menu"
            class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
            aria-label="Open sidebar"
        >
            <svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
        <div class="pt-2 pb-6 md:py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8" style="margin-bottom: 20px;">
                <h1 class="text-2xl font-semibold text-gray-900">Axies Infinity Neftify Pools</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <div class="max-w-lg mx-auto md:max-w-none md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h2 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">How it works</h2>
                                <div class="mt-3">
                                    <p class="text-lg leading-7 text-gray-500">
                                        Deposit the Axies you want to start generating yield on by sending it to the pool address below. You will need to use your Ronin wallet to “gift” your Axie to the pool. This is the only way to deposit
                                        since Ronin Chain is a permissioned blockchain. After that, the platform will recognize your address, and it will be mapped to your account. You can withdraw at any moment. Axie withdrawals can only
                                        be sent to the same address that deposited them.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-12 sm:mt-16 md:mt-0">
                                <h2 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">Learn more</h2>
                                <div class="mt-3">
                                    <p class="text-lg leading-7 text-gray-500">Learn more about the process of being a lender, how to deposit your axies, and how pool ownership works.</p>
                                </div>
                                <div class="mt-9">
                                    <div class="mt-6 flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3 text-base leading-6 text-gray-500">
                                            <a href="#" class="neftify" target="_blank">How does Neftify makes you money</a>
                                        </div>
                                    </div>

                                    <div class="mt-6 flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3 text-base leading-6 text-gray-500">
                                            <a href="#" class="neftify" target="_blank">How to deposit Axies to Neftify</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-100">
                <div class="pt-12 sm:pt-16 lg:pt-20">
                    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">Deposit your Axies to Neftify pools</h2>
                        </div>

                        <div class="bg-white shadow sm:rounded-lg" style="margin-top: 35px;">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="text-md leading-5 text-gray-500" style="margin: 10px;">
                                    <p>Because you logged in with an ethereum wallet, we mapped your address to the following Ronin wallet. This is the address that you need to deposit from:</p>
                                </div>

                                <div style="margin: 10px;">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900"><?php echo hide_address_ronin($lender_ronin_address); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
                    <div class="relative">
                        <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
                        <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                                <div class="bg-white px-6 py-8 lg:flex-shrink-1 lg:p-12">
                                    <h3 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">
                                        <?php echo $pool_name; ?>
                                    </h3>
                                    <p class="mt-6 text-base leading-6 text-gray-500">Only deposit your Axies to the pool address shown below, and confirm that it matches the pool name before sending.</p>
                                    <div class="mt-8">
                                        <div class="flex items-center">
                                            <h4 class="pr-4 bg-white text-sm leading-5 tracking-wider font-semibold uppercase text-indigo-600">Neftify Pools Address (Only send to this address)</h4>
                                            <div class="flex-1 border-t-2 border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                                            <li class="flex items-start lg:col-span-1">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"
                                                        ></path>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-sm leading-5 text-gray-700"><?php echo $pool_address; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-24">
                                    <p class="mt-4 text-sm leading-5"><a class="font-medium text-gray-500 underline" href="#"></a></p>
                                    <div class="mt-6 leading-5">
                                        <div class="rounded-md shadow">
                                            <a
                                                class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out copy"
                                                href="#"
                                                data-clipboard-text="<?php echo $pool_address; ?>"
                                            >
                                                Copy Address
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
