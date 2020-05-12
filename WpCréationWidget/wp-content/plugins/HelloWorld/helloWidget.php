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

         // corps du widget
         $couleur = get_option('helloworld_couleur', 'white'); 
         $taille = get_option('helloworld_taille', '2em'); 
         ?> 
         <div id="test" style="color:<?php echo $couleur;?>">Hello World est un plug-in qui enregistre les commentaires en base de données</div>
       
         <form action="" method="post">
            <p>
                <label for="helloworld_nom" style="font-size:<?php echo $taille;?>">Votre Nom :</label>
                <input id="helloworld_nom" name="helloworld_nom" type="texte" />
            </p>
            <p>
                <label for="helloworld_comm">Votre commentaire :</label>
                <input id="helloworld_comm" name="helloworld_comm" type="texte" />
            </p>
            <input type="submit" />
        </form>
    <?php
        echo $args['after_widget'];
    }
    public function form($instance)
    // formulaire de gestion des paramètres pour le module d'administration 
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
    ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  $title; ?>" />
        </p>
    <?php
    }
}
