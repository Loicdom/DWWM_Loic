<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'evalbackwp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'EvalBackWp' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mp' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2$(K~q; K$ueqt=#dG<y!g+<~zzVT7!JuvsQ?,_U;!iKRmD%nfbPzOEZ*F?J>0cr' );
define( 'SECURE_AUTH_KEY',  'f@}[6I)`f%3#jt}zvm6GONT[q[=>/f{I}&Cz[lVMPF-u(b8bqzNv!.=9^7r%{^?7' );
define( 'LOGGED_IN_KEY',    '.b mtZ:#BJtXKqkAZcMp@|W_f2KY&F9Iu9GKTKXEn]#r]bG</~].qqQtXE;:s23`' );
define( 'NONCE_KEY',        '>Fb)Jx{j;B<kls/iMGZyj_3]{I6{F>rm4;G/cZfegsyONkf(7Yurc8Eh+Z Cq#Ga' );
define( 'AUTH_SALT',        'n@Sc&;y+P}:R#T#fvT|p+#Z:HgWr4{b*td(?yjT <Xj.4=G:k6k#YS>fLoOMkRch' );
define( 'SECURE_AUTH_SALT', 'A9+Y~;hTvcl2@bpv(X#z,K?x9KE3kR8?-Mz=sjP@z<Uhg}cwSa_7Twht0xc:zq*b' );
define( 'LOGGED_IN_SALT',   'NeQl|6wVSn]A_,esT{*s4Y]/!lq+GIT8mF-Y4]X$Zd@pO5(+8V<+AxNi6.rKZL?{' );
define( 'NONCE_SALT',       '.#KS ]#b9u1xFq#$SeYHuwT<jkxJT%;/)tE@]/b99X<zHuOxs=y3C*e,8mvrcjIb' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
