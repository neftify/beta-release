<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="py-4">
                    <?php show_message(); ?>
                </div>

                <?php
                    print_user_payout(
                        'Payout Address For Axie Infinity',
                        'This address was generated using the Ethereum wallet that you connected to Neftify. Make sure that your Ronin wallet matches this address. By design, Ronin’s bridge replaces the ‘0x’ of your Ethereum
                                    wallet for ‘ronin:’ When you deposit Axies to one of our pools, we map it to that address. You will need to log in to the Ronin network with your Metamask
                                    <b>'.hide_address($lender_eth_address).'</b> address to withdraw your earnings.',
                        $lender_ronin_address
                    );

                    if($lender['email']) {
                        print_email_notifications();
                    }

                    print_change_email();
                ?>
            </div>
        </div>
    </main>
</div>
