<?php
/**
 * @package monImage
 * @version 1.
 */
/*
Plugin Name: monImage
Plugin URI: http://wordpress.org/plugins/monImage/
Description: Permet de changer l'image au survol de la souris
Author: Loïc
Version: 1.0
Author URI: http://ma.tt/
*/

function affichage_image() {
	
	printf( // problème d'affichage donc je l'ai désactivé (mon image change bien mais l'image se répète tout le temps)
		'<div id="img">Mon image</div>'
	);
}

add_action( 'admin_notices', 'affichage_image' );

function Image_css() {
	echo "
	<style type='text/css'>
	div {
		background: url('../../Img/1ereimg.jpeg');
		background-repeat: no-repeat; !important
		}
	div:hover {
		background: url('../../Img/2emeimg.jpg');
		background-repeat: no-repeat; !important
		}
	</style>
	";
}

add_action( 'admin_head', 'Image_css' );
