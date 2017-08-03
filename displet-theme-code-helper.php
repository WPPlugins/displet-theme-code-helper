<?php
/*
Plugin Name: Displet Theme Code Helper
Plugin URI: http://displet.com/wordpress-plugins/displet-theme-code-helper
Description: This plugin removes the faulty formatting which can produce malformed plugin output that numerous unsavvy theme developers have used to replace WordPress' default formatting.
Version: 1.0
Author: Displet
Author URI: http://displet.com/
*/

/*  Copyright 2013 Displet

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

remove_filter('the_content', 'my_formatter', 99);
add_filter('the_content', 'wpautop');
add_filter('the_content', 'wptexturize');

?>
