<?php

/**
 * @package AdminPostNotifier
 * 
 */

/*
Plugin Name: Admin Post Notifier
Description: Sends out notifications when there are new posts pending review. Currently works for contributors.  
Author: Ayodeji Afolabi
Author URI: https://twitter.com/dev_ayo
Version: 1.0.0
License: GPLv2 or later
Requires PHP: 7.4.13
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

*/

defined('ABSPATH') or exit("Hey, what are you doing here? You silly human! \n");

if (file_exists(dirname(__FILE__)."/vendor/autoload.php")) {
  require_once dirname(__FILE__)."/vendor/autoload.php";
}

if (class_exists('AdminPostNotifier\\Init')) {
  add_action( 'init',  array('AdminPostNotifier\Init', 'init_services') );
}
