<?php
/*
Plugin Name: WP e-Commerce Simple Product Options
Plugin URI: https://www.ademti-software.co.uk/
Description: WP e-Commerce extension that allows you to add simple "product options" to products without having to create or manage variations
Author: Lee Willis
Version: 2.0
Author URI: https://www.ademti-software.co.uk/
License: GPLv3
*/

/**
 * Copyright (c) 2011-2015 Lee Willis. All rights reserved.
 * Copyright (c) 2015-2024 Ademti Software. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

if ( ! is_admin() || ( defined('DOING_AJAX') && DOING_AJAX ) ) {
	require_once ( 'simple-product-options-frontend.php' );
}

if ( is_admin() && ( ! defined('DOING_AJAX') || ! DOING_AJAX ) ) {
	require_once ( 'simple-product-options-admin.php' );
}

require_once ( 'simple-product-options-common.php' );
