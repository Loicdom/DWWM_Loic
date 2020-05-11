<?php 
/* 
Plugin Name: Bonjour 
Description: ecrit Bonjour bonjour les petits
Author: Loïc
Version: 1.0 
*/ 
 
class BonjourWorld_Plugin{  
    public function __construct(){   
        include_once plugin_dir_path(__FILE__).'/bonjourClass.php';   
        new bonjourClass();  
    } 
} 
new BonjourWorld_Plugin(); 