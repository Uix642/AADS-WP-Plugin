<?php
/**
 * @package A-ADS
 */

/**
 * Plugin Name:       A-ADS
 * Plugin URI:        https://a-ads.com
 * Description:       Simple advertising blocks integration.
 * Version:           1.1.0
 * Requires at least: 5.2
 * Requires PHP:      5.2
 * Author:            A-ADS
 * Author URI:        https://a-ads.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       code_integration
 * Domain Path:       /A-ADS
 * Developed By:      Micheal George
 */
 
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright (C) 2021 A-ADS.
*/

//Simple security measure
defined('ABSPATH') or die("You can't access this file");

//Include core.php
require_once(plugin_dir_path(__FILE__).'/core.php' );

//Include widget.php
require_once(plugin_dir_path(__FILE__).'/widget.php' );

?>