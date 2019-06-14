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
define( 'DB_NAME', 'music' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         '[bvg4l@0cwPxuAqVVU*P:<-,0uE_v*7h[ScA8OzS!N7*tHDwH}oxC3<>Xv%v~,t8' );
define( 'SECURE_AUTH_KEY',  'nheZM^Wm3D0a=Gv](}@uI|M0Wt1K^|zAs8!F&]O{?+qDd(]}Pv*RWck]bqf0O)6G' );
define( 'LOGGED_IN_KEY',    'A_y. K~P!?Xjnf)`x4#+**d(F!L,ykh&Z]^LQc/Q1{ql)RVTMJL6p-dY;[?A,F^u' );
define( 'NONCE_KEY',        '&z4vRh&5/;|<~<K%(A>X`-m2+ V/m?x]qXx=%r&+_k`}GU^?DczsFq{iAm$GT!32' );
define( 'AUTH_SALT',        '^I)i{|w0it3mx%B)Fcf Sneut=Q}s}U6^@NUm)ho-!}=>D/{voBbZ{d,*sx_&HU5' );
define( 'SECURE_AUTH_SALT', 'W9C;LDI<xGK$lA<*)nq(2{D:G[p]K#G6(?<#8mZMnKu(IS(0=+$~G<G6+>cFuIv(' );
define( 'LOGGED_IN_SALT',   'QjGVO)92kAJ`^u5#zxDcMAyT]2+M|j&:i6}e;~y~4+&10..YtY>HcJ^yc-9>Fs#$' );
define( 'NONCE_SALT',       '_6|B0t_[,b;Xr1wsiQS4|:aro wJ.1[&{_!9Wj)?t 6:JWQqgm>}Tfk=307kw(VC' );
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
