<?php
ob_start();
$_tests_dir = getenv('WP_TESTS_DIR');
if ( !$_tests_dir ) $_tests_dir = '/tmp/wordpress-tests-lib';

require_once $_tests_dir . '/includes/functions.php';

function _manually_load_plugin() {
	require dirname( __FILE__ ) . '/../wp-simple-nonce.php';
    require_once ABSPATH.'wp-content/plugins/wp-session-manager/wp-session-manager.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );


require $_tests_dir . '/includes/bootstrap.php';

