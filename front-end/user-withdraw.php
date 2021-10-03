<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    // Get full pool amount
    $axie_pool_amount = get_axie_asset('count', array());

    if($request_for_withdraw>0) {
        $form_success = "You currently have a pending withdraw request to $lender_ronin_address. This may take up to 72 hours.";
    }

    require_once 'user-side-menu.php';
?>
    <div class="flex flex-col w-0 flex-1 overflow-hidden">
        <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
            <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
                <svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
            <div class="pt-2 pb-6 md:py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <h1 class="text-2xl font-semibold text-gray-900">Axies Withdraw</h1>
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="py-4">
                            <?php show_message(); ?>
                        </div>

                    <div class="py-4">

                        <div>
                            <div class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
                                <div>
                                    <div class="px-4 py-5 sm:p-6">
                                        <dl>
                                            <dt class="text-base leading-6 font-normal text-gray-900">Your Axies</dt>
                                            <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                                <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                    <span><?php echo $axie_lender_amount;?></span>
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        if($request_for_withdraw<=0) {
                    ?>
                    <div class="py-4">
                        <div class="bg-white shadow sm:rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Withdraw your Axies</h3>
                                <div class="mt-2 text-sm leading-5 text-gray-500">
                                    <p>You will be withdrawing all your axies associated with your current account <b><?php echo get_first_address_hidden($lender_ronin_address, $type = 'ronin'); ?></b>. The Axies will be sent to the address. This may take up to 72 hours because the Axies have to be removed from the players account.</p>
                                </div>
                            <div class="mt-5">
                                <form method="POST">
                                    <button class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5" type="submit" name="withdraw-axie">Withdraw My Axies</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                    </div>
                </div>
            </div>
        </main>
    </div>