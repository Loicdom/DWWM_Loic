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
define( 'DB_NAME', 'EvalWordPress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'EvalWordPress' );

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
define( 'AUTH_KEY',         'hJ!B4Jxs?QHL|<dApck@r8[,yI,Fw2?RhXK@5RJlUxMifF_um~O_(|_]i4eu]L2V' );
define( 'SECURE_AUTH_KEY',  '#mC;q#V49&3U8:NJ.oNU%|3t9Pr*R XK8Q=i*G}VpyF%+uQjb,P(k3]]Fz_st|7e' );
define( 'LOGGED_IN_KEY',    'Vk`kUb(=4&C+,Lj1kU(*XWwYHRCXil6yZk,afy;D1)*+^li5[~~&869>PWLpdJ]?' );
define( 'NONCE_KEY',        'L=E+2MX4U)AB2^pEpBF9u0sS@n=|2L}$(}&2 z0TaDL0qC0+wB_m^XC/.V&vV3e2' );
define( 'AUTH_SALT',        '+/pNUOu-_RkfI5?HvNeLkMkYSkpSLEwbF$Q@`)&PiRQpTM[$uw.tCr!z`+u,Y9Ft' );
define( 'SECURE_AUTH_SALT', '%(1$vVF,.Ama4-l!W0>Y&zFx2vVS qye8>{dJ)!Q^i hhD$49yyW#Na_TuLyhmwN' );
define( 'LOGGED_IN_SALT',   'g.9+*(d|f#Kp8@*Mo6_b+J3q|BycH*0Ofsx8$: V}{$AA7M)/!xL_pxC2>PIUNwh' );
define( 'NONCE_SALT',       '00/p0TgZ[h!-GMe~}d,7.R;RAU`La=(tKrTz5+5L2i6xlvi?7X0b c^_d^[Bb,zX' );
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
