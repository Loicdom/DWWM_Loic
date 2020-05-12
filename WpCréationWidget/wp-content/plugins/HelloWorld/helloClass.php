<?php
//on inclu la definition du widget 
include_once plugin_dir_path(__FILE__) . '/hellowidget.php';

class HelloClass
{
    public function __construct()
    {
        // on déclare le widget   
        add_action('widgets_init', function () {
            register_widget('HelloWidget');
        });
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);
        // on ajoute l'action de sauvegarde au chargement du widget   
        add_action('wp_loaded', array($this, 'save_comm'));
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
        add_action('admin_init', array($this, 'register_settings')); 
    }
    function persoCSS()
    {
        wp_enqueue_style('Hellocss', plugins_url('helloworld/design.css'));
    }
    public static function install()
    { //méthode déclenchée à l'activation du plug-in     
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}commentaire (id INT AUTO_INCREMENT PRIMARY KEY, comments VARCHAR(255) NOT NULL);");
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}testNom (id INT AUTO_INCREMENT PRIMARY KEY, nom VARCHAR(255) NOT NULL);");
    }
    public static function uninstall()
    { //méthode déclenchée à la suppression du module   
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}commentaire;");
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}testNom;");
    }
    public function save_comm()
    {
        if (isset($_POST['helloworld_comm']) && !empty($_POST['helloworld_comm'] || isset($_POST['helloworld_nom']) && !empty($_POST['helloworld_nom']))) {
            global $wpdb;
            $comm = $_POST['helloworld_comm'];
            $nom = $_POST['helloworld_nom'];
            $rowCom = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}commentaire WHERE comments = '$comm'");
            $rowNom = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}testNom WHERE nom = '$nom'");
            if (is_null($rowCom)) {
                $wpdb->insert("{$wpdb->prefix}commentaire", array('comments' => $comm));
            }
            if (is_null($rowNom)) {
                $wpdb->insert("{$wpdb->prefix}testNom", array('nom' => $nom));
            }
        }
    }
    public function add_admin_menu()

    {
        //on ajoute une page dans le menu administrateur  
        add_menu_page('Hello World', 'Hello World plugin', 'manage_options', 'helloworld', array($this, 'menu_html'));
    }
    public function menu_html()
    {
        echo '<h1>' . get_admin_page_title() . '</h1>';
    ?>
        <form method="post" action="options.php">
            <label>Couleur</label>
            <input type="text" name="helloworld_couleur" value="<?php echo get_option("helloworld_couleur") ?>" />
            <label>taille</label>
            <input type="text" name="helloworld_taille" value="<?php echo get_option("helloworld_taille") ?>" />
            <?php settings_fields('helloworld_settings') ?> 
            <?php submit_button(); ?>
        </form>
    <?php
    }

    public function register_settings() 
    {     
        register_setting('helloworld_settings', 'helloworld_couleur'); 
        register_setting('helloworld_settings', 'helloworld_taille'); 
    }
}
