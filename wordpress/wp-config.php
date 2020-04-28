<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'workP1siteCMS' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']zH>woZrWe.Y0FZE]*LX2[7v9F(npF5zoPk0];gMJ!<vE9SIkv3{y^b[&7t1SZK-' );
define( 'SECURE_AUTH_KEY',  'AGB1Ly4Jw1iPB3n|%)|V9{|}&Q8c q+GqpBH+hRSGD=t2PKzr1~5[)G2Sk$]jKw9' );
define( 'LOGGED_IN_KEY',    '_FfwK&*-8.PS&Oa42a*SHW/IX^5jM$Rd]P^}){`@P{%=!JHI#s}I-jk0yIiuA-e/' );
define( 'NONCE_KEY',        '[26E/4:rQ}(-<.Gvy2DHO,O&fplX8+sCWqe17GQ!.=Y{o*F_b?&|FnFxN%Fpggdx' );
define( 'AUTH_SALT',        'k*v~l/>y,w{WD4jGMh:<Nn;lO;sZ![f8_lREBVn9`@.t<MIBO!ER$`HAtM@B6qoD' );
define( 'SECURE_AUTH_SALT', '))v[)5t26;3`xH$l>|uBZr. u;s+6B^S,<`aMN*^+[U;8mpKX<*sX7*fvem|fYi5' );
define( 'LOGGED_IN_SALT',   '@vPQPW3aqL21Ye{. ~Fl<KAh`}{huy-:$EJ2Zau65q}C/f,RsRsA *efD^*3=1(!' );
define( 'NONCE_SALT',       'i5rI/e&rmy88a!sDb*J=KT,9TOmQ@}i21PF3itfjgWq|Kh^D2g]v+gtxn%jT5ire' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
