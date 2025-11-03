<?php
/**
 * Test File for WPCS
 *
 * @package Test
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Simple test class.
 */
class Test_Class {

	/**
	 * Test method.
	 *
	 * @param string $name User name.
	 * @return string
	 */
	public function greet( $name ) {
		return 'Hello, ' . $name . '!';
	}
}
