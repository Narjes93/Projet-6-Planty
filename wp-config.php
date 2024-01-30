<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L6Ib&{cEE0*]h,LRY Qup:%j:X}_#<K2T+]~[QyKj LlB6bXznXXfb$c@>mJB8{5' );
define( 'SECURE_AUTH_KEY',  '*&Izc*@wD~HM-O-WHH(M0n*1jrU!cx0}!ogtZY=nkA?6b49@]G]M.|F{y0LpKp<}' );
define( 'LOGGED_IN_KEY',    'Y:6s9EA(tcAl?uGaQ`F(%oEC}FFYRmv- mAhJ/9>f}qx_FEcMoBlQ4:/wZHj&V&g' );
define( 'NONCE_KEY',        '68ViUx)!`eSevDJ^ExJ1;l:}l={H,Ht5C7f-*^gIZqRD?y4;h{j{-wGB:>9sB%w{' );
define( 'AUTH_SALT',        '%*X [#A0JI=pA{alm`c>dJ!l+!bgu[A^ WC)<^QA*$KZU_w%a7}-{T8I,+t$56)H' );
define( 'SECURE_AUTH_SALT', 'iA9%=v*pn!*~>Th99I/CYWgLdy!fLK-YuRowz(:|H(jCxYnaKA{#$O*as~l2SM.e' );
define( 'LOGGED_IN_SALT',   'f(<an7:eH;G[x/:+Q9I@t*tQ3C4K9+{$[it&Mc,gYW-T#V)f{`U{7/fhD/Je`vpQ' );
define( 'NONCE_SALT',       '[JnabG-8r)YvaK2PQmu1 2afbd,d#5OFs[!4m|@E)9d*vaPq%=m@2V=D,v4{Oe]Y' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
