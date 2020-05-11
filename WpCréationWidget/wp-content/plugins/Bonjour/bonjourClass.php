<?php 
//on inclu la definition du widget 
include_once plugin_dir_path( __FILE__ ).'/bonjourwidget.php'; 
 
class bonjourClass{  
    public function __construct(){   
        // on déclare le widget   
        add_action('widgets_init', function(){register_widget('bonjourWidget');});  
        add_action('wp_enqueue_scripts',array($this,'persoCSS'),15); 
    } 
    function persoCSS() 
    {  
        wp_enqueue_style('bonjourcss', plugins_url('Bonjour/design.css')); 
    }
} 