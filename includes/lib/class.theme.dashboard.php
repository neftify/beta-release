<?php

    //user-markets.php
    function new_user_market($name, $borrowers, $APY, $TVL) {
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <div class="py-4">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900"><?php echo $name; ?></h3>
            <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">No. of Borrowers</dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900"><?php echo number_format($borrowers); ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">APY</dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900"><?php echo $APY; ?>%</dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">TVL</dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">$<?php echo number_format($TVL); ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }

    //user-profile.php
    function print_change_email() {
        global $lender;
?>

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
                            value="<?php if(!empty($lender['email'])) { echo $lender['email']; } ?>"
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


<?php
    }

    //user-profile.php
    function print_email_notifications() {
        global $lender;
?>

<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900" id="renew-headline">Receive alerts</h3>
        <div class="mt-2 sm:flex sm:items-start sm:justify-between">
            <div class="max-w-xl text-sm leading-5 text-gray-500">
                <p id="renew-description">Get email notifications once a payout is sent</p>
            </div>
            <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                <?php
                    if($lender['notifications']==1) {
                        $bg = 'bg-indigo-600';
                        $translate = 'translate-x-5';
                        $switch_value = 0; 
                    }
                    else {
                        $bg = 'bg-gray-200';
                        $translate = 'translate-x-0';
                        $switch_value = 1; 
                    }
                ?>
                <form method="POST" id="alerts-form">
                    <input type="hidden" name="switch_value" value="<?php echo $switch_value; ?>" />
                </form>

                <span
                    id="alerts-button"
                    class="<?php echo $bg; ?> relative inline-block flex-no-shrink h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline"
                    role="checkbox"
                    tabindex="0"
                    aria-checked="false"
                    aria-labelledby="renew-headline"
                    aria-describedby="renew-description"
                >
                    <span class="<?php echo $translate; ?> inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200" aria-hidden="true"></span>
                </span>
            </div>
        </div>
    </div>
</div>

<?php
    }

    //user-profile.php
    function print_user_payout($title, $content, $address) {
        global $lender;
?>

<div class="py-4">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900"><?php echo $title; ?></h3>
            <div class="mt-5">
                <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start sm:justify-between">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 sm:mt-0 sm:ml-4">
                            <div class="text-sm leading-5 font-medium text-gray-900"><?php echo hide_address($address); ?></div>
                            <div class="mt-1 text-sm leading-5 text-gray-600 sm:flex sm:items-center">
                                <div>Default</div>
                                <span class="hidden sm:mx-2 sm:inline" aria-hidden="true">·</span>
                                <div class="mt-1 sm:mt-0">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="mt-4 sm:mt-0 sm:ml-6 sm:flex-shrink-0">
                        <span class="inline-flex rounded-md shadow-sm"> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }

?>