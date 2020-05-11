<?php 
class bonjourwidget extends WP_Widget 
{  
    public function __construct()     
    {         
        parent::__construct('bonjourworld', 'Bonjour', array('description' => 'Un plug-in qui écrit Bonjour bonjour les petits'));     
    }  
    public function widget($args, $instance)  
    { // formulaire afficher à l'écran pour l'utilisateur 
 
    // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées     
    echo $args['before_widget'];     
    echo $args['before_title'];     
    echo apply_filters('widget_title', $instance['title']);     
    echo $args['after_title'];     
    // corps du widget  
    ?>     
    <h2>Bonjour bonjour les petits</h2>     
    <?php     
    echo $args['after_widget'];  
    }
} 