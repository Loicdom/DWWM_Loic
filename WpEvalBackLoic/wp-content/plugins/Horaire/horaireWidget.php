<?php
class horairewidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('horaire', 'Horaire', array('description' => 'Un plug-in qui affiche les horaires du magasin'));
    }
    public function widget($args, $instance)
    { // formulaire afficher à l'écran pour l'utilisateur 

        // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées     
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];

        // corps du widget  
        $choixJours = get_option('horaire_choixjours', 'Lundi'); 
        $touteSemaine = get_option('horaire_touslesjours', 'checked'); 
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
