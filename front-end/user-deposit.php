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
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Axie Infinity</h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">Deposit your Axies to Neftify pools.</p>
    </div>
    <div class="px-4 py-5 sm:px-6">
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <dt class="text-sm leading-5 font-medium text-gray-500">Pool Name</dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">
                    <b><?php echo $pool_name; ?></b>
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm leading-5 font-medium text-gray-500">NFTs Accepted</dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">Axie Infinity</dd>
            </div>
            <div class="sm:col-span-2">
                <dt class="text-sm leading-5 font-medium text-gray-500">How it works</dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">
                    Deposit the Axies you want to start generating yield on by sending it to the pool address below. You will need to use your Ronin wallet to “gift” your Axie to the pool. This is the only way to deposit since Ronin Chain
                    is a permissioned blockchain. After that, the platform will recognize your address, and it will be mapped to your account. You can withdraw at any moment. Axie withdrawals can only be sent to the same address that
                    deposited them.
                </dd>
            </div>

            <div class="sm:col-span-2">
                <dt class="text-sm leading-5 font-medium text-gray-500">Because you logged in with an ethereum wallet, we mapped your address to the following Ronin wallet. This is the address that you need to deposit from:</dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">
                    <ul class="rounded-md">
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex items-center">
                                <span class="ml-2 flex-1 w-0 truncate">
                                    <b><?php echo hide_address_ronin($lender_ronin_address); ?></b>
                                </span>
                            </div>
                        </li>
                    </ul>
                </dd>
            </div>

            <div class="sm:col-span-2">
                <dt class="text-sm leading-5 font-medium text-gray-500"><b>Warning</b></dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">Only deposit your Axies to the pool address shown below, and confirm that it matches the pool name before sending.</dd>
            </div>

            <div class="sm:col-span-2">
                <dt class="text-bg leading-5 font-medium text-gray-500" style="margin-bottom: 10px;"><b>Neftify Pools Address (Only send to this address)</b></dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">
                    <ul class="border border-gray-200 rounded-md">
                        <li class="border-t border-gray-200 pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex items-center">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                    />
                                </svg>
                                <span class="ml-2 flex-1 w-0 truncate" id="neftifyAddress" style="font-weight: bold;"><?php echo $pool_address; ?></span>
                            </div>
                            <div class="ml-4 flex-shrink-0"><a class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out copy" href="#" data-clipboard-target="#neftifyAddress">Copy</a></div>
                        </li>
                    </ul>
                </dd>
            </div>
        </dl>
    </div>
</div>
