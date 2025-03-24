<?php

$base     = dirname( dirname( __FILE__ ) );
$includes = $base . '/includes';

/**
 * require: IworksUpprev Class
 */
if ( ! class_exists( 'IworksUpprev' ) ) {
	require_once $includes . '/iworks/upprev.php';
}
/**
 * configuration
 */
require_once dirname( dirname( __FILE__ ) ) . '/etc/options.php';
/**
 * require: IworksOptions Class
 */
if ( ! class_exists( 'iworks_options' ) ) {
	require_once $includes . '/iworks/options/options.php';
}

/**
 * load github class
 *
 * @since 4.1.1
 */
$filename = __DIR__ . '/iworks/upprev/class-iworks-upprev-github.php';
if ( is_file( $filename ) ) {
	include_once $filename;
	new iworks_upprev_github();
}

/**
 * load options
 */
global $iworks_upprev_options;
$iworks_upprev_options = null;

function iworks_upprev_get_options() {
	global $iworks_upprev_options;
	if ( is_object( $iworks_upprev_options ) ) {
		return $iworks_upprev_options;
	}
	$iworks_upprev_options = new iworks_options();
	$iworks_upprev_options->set_option_function_name( 'iworks_upprev_options' );
	$iworks_upprev_options->set_option_prefix( IWORKS_UPPREV_PREFIX );
	if ( method_exists( $iworks_upprev_options, 'set_plugin' ) ) {
		$iworks_upprev_options->set_plugin( basename( __FILE__ ) );
	}
	$iworks_upprev_options->options_init();
	return $iworks_upprev_options;
}

function iworks_upprev_activate() {
	$iworks_upprev_options = iworks_upprev_get_options();
	$iworks_upprev_options->activate();
}

function iworks_upprev_deactivate() {
	$iworks_upprev_options = iworks_upprev_get_options();
	$iworks_upprev_options->deactivate();
}
