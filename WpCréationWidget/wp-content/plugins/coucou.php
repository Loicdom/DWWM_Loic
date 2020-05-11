<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Coucou
Plugin URI: http://wordpress.org/plugins/Coucou/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Loic
Version: 1.7.2
Author URI: http://ma.tt/
*/

function hello() {
	echo "Coucou";
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello' );


