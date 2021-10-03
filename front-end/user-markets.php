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
                                <h1 class="text-2xl font-semibold text-gray-900">Markets</h1>
                            </div>
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <div class="py-4">
                                    <div>
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Axie Infinity</h3>
                                        <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                                <div class="px-4 py-5 sm:p-6">
                                                    <dl>
                                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">No. of Borrowers</dt>
                                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900"><?php echo number_format(get_setting(12)); ?></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                                <div class="px-4 py-5 sm:p-6">
                                                    <dl>
                                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">APY</dt>
                                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900"><?php _setting(13); ?>%</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                                <div class="px-4 py-5 sm:p-6">
                                                    <dl>
                                                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">TVL</dt>
                                                        <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">$<?php echo number_format(get_setting(24)); ?></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>