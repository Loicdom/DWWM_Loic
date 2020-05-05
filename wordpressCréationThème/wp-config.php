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
define( 'DB_NAME', 'wp3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp3' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'workP1siteCMS' );

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
define( 'AUTH_KEY',         ':43Ui,KK7)V77!VFB#$m+GkgXCw0&:7N?d{ s<m#2+|.[=76!?naeWE@*z0ZL}.x' );
define( 'SECURE_AUTH_KEY',  'i#p99)L^z@+c+_f54jbJd^ySba:W)+gRt)%S4q$`TucXv;s-=]%58on7/o5dC4_z' );
define( 'LOGGED_IN_KEY',    'Z(|OQzF{HY~2>0e?kc>AnyKg<#F<0Beihjf.|J=Xi2a #/L#,)eUZwgr1Mc$;Hia' );
define( 'NONCE_KEY',        ',?|FijfJU8:+<sJ]d^ul#A0(a&B;S-QW@{2+%0Q-b>{_R>2RGTvd8`-~qfPx]V@5' );
define( 'AUTH_SALT',        ';i%(,=NaY;LWt7H/AgC}4Z1V#G^Y wFU+&XFX}J9Z9P)r4y&}y3us*LGqP=WWmOf' );
define( 'SECURE_AUTH_SALT', '*9Q)jjPF@/qS<N=p;L{B|o~@8p/Xr&+P$Fe,?ZXz@ZJ*}xJHJcve954m79MXBYTu' );
define( 'LOGGED_IN_SALT',   'Z_gRct$>=l<x}XAJx%PW;a&6{<?B:{d9-]s0hzES*hPc`tTD*%F#j-_l_HQbzu@o' );
define( 'NONCE_SALT',       '7|-0nD>&eK^B(#|<y_Q2-t%eQztg^XmTuCd6xD.J<bF-jTSG]iEn)d@p*NyKm#6d' );
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
