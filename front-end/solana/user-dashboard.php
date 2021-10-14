<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }
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
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="py-4">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="flex-1 min-w-0">
                            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">Helium</h2>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Pool Stats</h3>
                        <div class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
                            <div>
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-base leading-6 font-normal text-gray-900">My Helium</dt>
                                        <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                            <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                <span>0</span>
                                                <span class="ml-2 text-sm leading-5 font-medium text-gray-500">
                                                    of
                                                    4
                                                </span>
                                            </div>
                                            <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium leading-5 bg-gray-100 text-gray-800 md:mt-2 lg:mt-0">
                                                <span class="sr-only">Pool Ownership</span>
                                                <span class="ml-1">0%</span>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 md:border-0 md:border-l">
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-base leading-6 font-normal text-gray-900">24h Pool Earnings</dt>
                                        <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                            <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                <span>0</span>
                                                <span class="ml-2 text-sm leading-5 font-medium text-gray-500">HNT</span>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 md:border-0 md:border-l">
                                <div class="px-4 py-5 sm:p-6">
                                    <dl>
                                        <dt class="text-base leading-6 font-normal text-gray-900">Variable APY</dt>
                                        <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                            <div class="flex items-baseline text-2xl leading-8 font-semibold text-indigo-600">
                                                <span>0%</span>
                                                <span class="ml-2 text-sm leading-5 font-medium text-gray-500">Last 24h</span>
                                            </div>
                                        </dd>
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
