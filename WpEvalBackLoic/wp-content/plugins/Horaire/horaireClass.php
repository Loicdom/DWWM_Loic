<?php
//on inclu la definition du widget 
include_once plugin_dir_path(__FILE__) . '/horairewidget.php';

class HoraireClass
{
    public function __construct()
    {
        // on déclare le widget   
        add_action('widgets_init', function () {
            register_widget('horaireWidget');
        });
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);
        // on ajoute l'action de sauvegarde au chargement du widget   
        add_action('wp_loaded', array($this, 'save_comm'));
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
        add_action('admin_init', array($this, 'register_settings')); 
    }
    function persoCSS()
    {
        wp_enqueue_style('horairecss', plugins_url('Horaire/design.css'));
    }
    public static function install()
    { //méthode déclenchée à l'activation du plug-in     
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}horaire (id INT AUTO_INCREMENT PRIMARY KEY, jour VARCHAR(20) NOT NULL, matin VARCHAR(255) NOT NULL, après_midi VARCHAR(255) NOT NULL, choix VARCHAR(255) NOT NULL );");
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Lundi"));
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Mardi"));
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Mercredi"));
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Jeudi"));
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Vendredi"));
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Samedi"));
        $wpdb->insert("{$wpdb->prefix}horaire", array('jour' => "Dimanche"));
    }
    public static function uninstall()
    { //méthode déclenchée à la suppression du module   
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}horaire;");
    }
    public function save_comm()
    {
        if (isset($_POST['horaire_choixjours']) && !empty($_POST['horaire_choixjours'])) {
            global $wpdb;
            $jour = $_POST['horaire_choixjours'];
            $rowjour = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}horaire WHERE choix = '$jour'");
            if (is_null($rowjour)) {
                $wpdb->insert("{$wpdb->prefix}horaire", array('choix' => $jour));
            }
        }
        if (isset($_POST['horaire_touslesjours']) && !empty($_POST['horaire_touslesjours'])) {
            global $wpdb;
            $semaineEntiere = $_POST['horaire_touslesjours'];
            $rowSemaine = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}horaire WHERE choix = '$semaineEntiere'");
            if (is_null($rowSemaine)) {
                $wpdb->insert("{$wpdb->prefix}horaire", array('choix' => $semaineEntiere));
            }
        }
    }
    public function add_admin_menu()

    {
        //on ajoute une page dans le menu administrateur  
        add_menu_page('Horaire', 'Horaire plugin', 'manage_options', 'horaire', array($this, 'menu_html'));
    }
    public function menu_html()
    {
        echo '<h1>' . get_admin_page_title() . '</h1>';
    ?>
        <form method="post" action="options.php">

            <label for="choixJour">Premier jour de la semaine :</label>

            <select name="choixJour" id="choixJour" value="<?php echo get_option("horaire_choixjours") ?>" >
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="Samedi">Samedi</option>
                <option value="Dimanche">Dimanche</option>
            </select>
            <div>
                <input type="checkbox" id="toutSemaine" name="toutSemaine" checked value="<?php echo get_option("horaire_touslesjours") ?>">
                <label for="toutSemaine">Afficher tous les jours</label>
            </div>
            <?php settings_fields('horaire_settings') ?> 
            <?php submit_button(); ?>
        </form>
    <?php
    }

    public function register_settings() 
    {     
        register_setting('horaire_settings', 'horaire_choixjours'); 
        register_setting('horaire_settings', 'horaire_touslesjours'); 
    }
}
