<?php
/**
 * Initiator (custom-logo.php)
 *
 * @package     Initiator
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

/**
 *  Table of Content
 *
 *  1.0 - Includes (Custom Logo)
 */

/**
 *  1.0 - Includes (Custom Background)
 */
function initiator_load_custom_logo() {
	/**
	 * Support add_theme_support( 'custom-logo', $args );. This feature allows you to use custom logo to display images.
	 */
	$args = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'initiator_load_custom_logo' );
