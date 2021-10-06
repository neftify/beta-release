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

?>