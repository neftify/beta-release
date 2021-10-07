<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    $date = new DateTime('now');

    $current_day = $date->format('d');
    $current_month = $date->format('M');
    
    // Calculate the last day of the month
    $last_day = $date->modify('last day of this month');
    $last_day = $date->format('d');

    // Lets see in which interval are we
    //<15 days we are finishing the payments from last month
    if($current_day<15) {
        $first_payment_status = 'Upcoming';
        $second_payment_status = 'Current';
        $current_month_first = $current_month;

        $last_month_second = $date->modify('last day of previous month');
        $current_month_second = $last_month_second->format('M');
    }
    else {
        $first_payment_status = 'Current';
        $second_payment_status = 'Upcoming';  
        
        $current_month_first = $current_month;
        $current_month_second = $current_month;
    }

    require_once 'user-side-menu.php';
?>
<div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
        <button id="show-mobile-menu" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
            <svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
        <div class="pt-2 pb-6 md:py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-semibold text-gray-900">Payout Dates</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="py-4">
                    <div class="bg-gray-50 pt-12 sm:pt-16">
                        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="max-w-4xl mx-auto text-center">
                                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">Axie Infinity</h2>
                                <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">Payouts are made automatically within 72h to your saved Ronin wallet.</p>
                            </div>
                        </div>
                        <div class="mt-10 pb-12 bg-white sm:pb-16">
                            <div class="relative">
                                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                                    <div class="max-w-4xl mx-auto">
                                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-2">
                                            <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500"><?php echo $first_payment_status; ?></dt>
                                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600">
                                                    <?php echo $current_month_first; ?>
                                                    15
                                                </dd>
                                            </div>
                                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500"><?php echo $second_payment_status; ?></dt>
                                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600"><?php echo $current_month_second." ".$last_day; ?></dd>
                                            </div>
                                        </dl>
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
