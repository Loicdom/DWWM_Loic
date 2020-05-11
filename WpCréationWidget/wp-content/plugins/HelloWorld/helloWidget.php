<?php 
class hellowidget extends WP_Widget 
{  
    public function __construct()     
    {         
        parent::__construct('helloworld', 'Hello World', array('description' => 'Un plug-in qui écrit Hello World'));     
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
    <form action="" method="post">
        <p>
            <label for="helloworld_comm">Votre commentaire :</label>
            <input id="helloworld_comm" name="helloworld_comm" type="texte"/>
        </p>
        <input type="submit" class="btn"/>
    </form>
    <?php     
    echo $args['after_widget'];  
    }
} 