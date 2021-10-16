<?php
	if ( !defined('FRONTEND_LOAD') ) { die ( header('Location: /not-found') ); }

    if($user_footer_header) {
        echo '</div>';
    }
?>
<div class="bg-gray-800">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">Company</h4>
                        <ul class="mt-4">
                            <li><a class="text-base leading-6 text-gray-300 hover:text-white" href="/about">About</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="/team">Team</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="/careers">Careers</a></li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">Community</h4>
                        <ul class="mt-4">
                            <li><a class="text-base leading-6 text-gray-300 hover:text-white" href="<?php echo get_medium_link(); ?>" target="_blank">Medium</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="<?php echo get_twitter_link(); ?>" target="_blank">Twitter</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="<?php echo get_main_discord_link(); ?>" target="_blank">Discord</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="<?php echo get_github_link(); ?>" target="_blank">Github</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">Individuals</h4>
                        <ul class="mt-4">
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="/lender">Become a lender</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="/player">Become a player</a></li>
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="/rewards">Neftify Rewards</a></li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">Markets</h4>
                        <ul class="mt-4">
                            <li class="mt-4"><a class="text-base leading-6 text-gray-300 hover:text-white" href="/markets-axie-infinity">Axie Infinity</a></li>
                            <li class="mt-4">
                                <a class="text-base leading-6 text-gray-300 hover:text-white" href="/markets-helium">Helium<sup class="text-red-500">Beta</sup></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 xl:mt-0">
                <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">Subscribe to our newsletter</h4>
                <p class="mt-4 text-gray-300 text-base leading-6">The latest news, articles, and resources, on P2E sent to your inbox weekly.</p>

                <form id="chimp-form" class="mt-4 sm:flex sm:max-w-md" action="/front-end/mailchimp/subscribe.php" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" novalidate>
                    <input
                        id="chimp-email"
                        class="appearance-none w-full px-5 py-3 border border-transparent text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 transition duration-150 ease-in-out"
                        aria-label="Email address"
                        type="email"
                        required=""
                        placeholder="Enter your email"
                    />
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button
                            class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:bg-indigo-400 transition duration-150 ease-in-out"
                            type="submit"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>

                <div id="response" style="margin-top: 20px;"></div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex md:order-2">
                <a class="ml-6 text-gray-400 hover:text-gray-300" href="<?php echo get_medium_link(); ?>" target="_blank">
                    <span class="sr-only">Medium</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </a>

                <a class="ml-6 text-gray-400 hover:text-gray-300" href="<?php echo get_twitter_link(); ?>" target="_blank">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                        ></path>
                    </svg>
                </a>
                <a class="ml-6 text-gray-400 hover:text-gray-300" href="<?php echo get_main_discord_link(); ?>" target="_blank">
                    <span class="sr-only">Discord</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </a>
                <a class="ml-6 text-gray-400 hover:text-gray-300" href="<?php echo get_github_link(); ?>" target="_blank">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base leading-6 text-gray-400 md:mt-0 md:order-1">© 2021 Neftify. All rights reserved.</p>
        </div>
    </div>
</div>

<script type="text/javascript" src="/front-end/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/front-end/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/front-end/js/clipboard.min.js"></script>

<script type="text/javascript" src="/front-end/js/web3.min.js"></script>
<script type="text/javascript" src="/front-end/js/web3modal-index.js"></script>
<script type="text/javascript" src="/front-end/js/web3-provider-index.min.js"></script>

<script type="text/javascript" src="/front-end/js/vue.min.js"></script>
<script type="text/javascript" src="/front-end/js/axios.min.js"></script>

<script type="text/javascript" src="/front-end/js/web3-modal.js"></script>
<script type="text/javascript" src="/front-end/js/web3-app.js"></script>
<script type="text/javascript" src="/front-end/js/custom.js"></script>

<script type="text/javascript" src="/front-end/js/nacl.min.js"></script>
<script type="text/javascript" src="/front-end/js/nacl-util.min.js"></script>

<!-- Place This Script At The End Or It Will Break your JS -->
<script type="text/javascript">
    var clipboard = new ClipboardJS(".copy");
</script>

  </body>
</html>