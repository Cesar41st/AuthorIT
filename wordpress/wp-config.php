<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'authorit');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Oe76l~p2E;aL>R2iq~,w.oVvy^C5_om4qN[L|a`UkfJ9!Knp5 HB^Tt~4_{`OH)Z');
define('SECURE_AUTH_KEY',  '-$t:S[FC@m;.rM3Y];7j]s]1ox8K(wk:%yb H?xAw/JKH^~|GYem1W[yK.;>5*9^');
define('LOGGED_IN_KEY',    'W2B|oQj^ZF3%l&*^D#V`7-|]^%Z>wJsI{tR1>o{d@#LPo[x0gIu*U`^Wt3Ge/PT.');
define('NONCE_KEY',        'Yo&b6KZnxj|f%Eb_tM/^4G <<dcU6VH0kJ^PJMhE?Zi|]=)8kU=u%EI2Dp/FUfd-');
define('AUTH_SALT',        'r;X,5L^%|Q,|rIT0Guoor4yu}(wc_`iu&?T$q_ WD&^<<3?T-A*2CxTh1tEp44eE');
define('SECURE_AUTH_SALT', '6|1B.fM`?7TX. Esc`trS|zhF~,xVmxdft&(A%1 )2%.QexJ#16*6,(6jwo~)VwW');
define('LOGGED_IN_SALT',   '])sVSS^PeWi:F4&,/T.WzIn6)V3mL62#L!cO)MZ$B{DDGS816P6t|9s3Yn!lReq^');
define('NONCE_SALT',       'qW&8??Zh#n0/|Z`cy[K]`XR3}fq&|#Q1lU;82e,px{YfI{F8$o8GKOy>`~OO?fzk');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'au_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');