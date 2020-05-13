<?php 
/* 
Plugin Name: Horaire 
Description: affiche les horaires d'ouverture d'un magasin 
Author: Loïc
Version: 1.0 
*/ 
 
class Horaire_Plugin{  
    public function __construct(){   
        include_once plugin_dir_path(__FILE__).'/horaireClass.php';   
        new HoraireClass();  
        register_activation_hook(__FILE__, array('horaireclass', 'install'));
        register_deactivation_hook(__FILE__, array('horaireclass', 'uninstall')); 
    } 
} 
new Horaire_Plugin(); 