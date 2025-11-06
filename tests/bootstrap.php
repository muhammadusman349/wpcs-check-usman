<?php
//  PHPUnit bootstrap setup

$_tests_dir = getenv('WP_TESTS_DIR') ?: '/tmp/wordpress-tests-lib';

require_once $_tests_dir . '/includes/functions.php';

tests_add_filter('muplugins_loaded', function() {
    $plugin_file = '/tmp/wordpress/wp-content/plugins/under-construction-maintenance-mode/under-construction-maintenance-mode.php';
    if (file_exists($plugin_file)) require_once $plugin_file;
});

require $_tests_dir . '/includes/bootstrap.php';