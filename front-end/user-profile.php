<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    require_once 'user-side-menu.php';
?>
                <div class="flex flex-col w-0 flex-1 overflow-hidden">
                    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                        <button
                            class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
                            aria-label="Open sidebar"
                        >
                            <svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                    </div>
                    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                        <div class="pt-2 pb-6 md:py-6">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>
                            </div>
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <div class="py-4">
                                    <?php show_message(); ?>
                                </div>

                                <div class="py-4">

                                <div class="bg-white shadow sm:rounded-lg">
                                        <div class="px-4 py-5 sm:p-6">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">Payout address</h3>
                                            <div class="mt-5">
                                                <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start sm:justify-between">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="mt-3 sm:mt-0 sm:ml-4">
                                                            <div class="text-sm leading-5 font-medium text-gray-900"><?php echo get_first_address_hidden($lender_ronin_address, $type = 'ronin'); ?></div>
                                                            <div class="mt-1 text-sm leading-5 text-gray-600 sm:flex sm:items-center">
                                                                <div>Default</div>
                                                                <span class="hidden sm:mx-2 sm:inline" aria-hidden="true">·</span>
                                                                <div class="mt-1 sm:mt-0">This address was generated using the Ethereum wallet that you connected to Neftify. Make sure that your Ronin wallet matches this address. By design, Ronin’s bridge replaces the ‘0x’ of your Ethereum wallet for ‘ronin:’ When you deposit Axies to one of our pools, we map it to that address. You will need to log in to the Ronin network with your Metamask <b><?php echo get_first_address_hidden($lender_eth_address, $type = 'eth'); ?></b> address to withdraw your earnings.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 sm:mt-0 sm:ml-6 sm:flex-shrink-0">
                                                        <span class="inline-flex rounded-md shadow-sm">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-4">
                                    <div class="bg-white shadow sm:rounded-lg">
                                        <div class="px-4 py-5 sm:p-6">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">Email</h3>
                                            <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                                                <p>Change the email address you want to be associated with your account.</p>
                                            </div>
                                            <form method="POST">
                                            <div class="mt-5 sm:flex sm:items-center">
                                                <div class="max-w-xs w-full">
                                                    <label class="sr-only" for="email">Email</label>
                                                    <input
                                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                        id="email"
                                                        type="email"
                                                        name="email"
                                                        placeholder="<?php if(!empty($lender['email'])) { echo $lender['email']; } else { echo'you@example.com'; } ?>"
                                                    />
                                                </div>

                                                <span class="mt-3 inline-flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
                                                    <button
                                                        class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5"
                                                        type="submit"
                                                        name="submit-email"
                                                    >
                                                        Save
                                                    </button>
                                                </span>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>