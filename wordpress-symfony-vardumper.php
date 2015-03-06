<?php

/*
 * Plugin Name: WordPress Symfony VarDumper
 * Description: Brings the Symfony VarDumper component to your WordPress installation.
 * Author: Coen Jacobs
 * Author URI: http://coenjacobs.me
 * Version: 1.0.0
 */

include( dirname( __FILE__ ) . '/vendor/autoload.php' );

$updatePhp = new WPUpdatePhp( '5.4.0' );

if ( $updatePhp->does_it_meet_required_php_version( phpversion() ) ) {
	if ( function_exists('dd') ) {
		return;
	}

	function dd( $data ) {
		dump( $data );
		die();
	}
}
