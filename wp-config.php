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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ubuntu');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@T1$G.w%1 jWFTYvUH?ll(BdW*c!uG`-4]6p6n+-~4]^V2>&yippu8Mn.f5ig89[');
define('SECURE_AUTH_KEY',  'F^ &sly7!C^$DgqDu3}]3H#k*i38N_m<OF|ik~ETe>,)ywqY(PFW}4*c0yRUMAHT');
define('LOGGED_IN_KEY',    'q_=VB@XPlT|d2b-R62C8i>9@O`HHuFVT.A++Xoz<N+deD{wh2phS@_K[t^jCpF~}');
define('NONCE_KEY',        '^e]2CNU%t=.]M{T8xSctH,J4sO;$;FUS)}D1p}!zkE|}#/jWD=Z(&S`?eoZoG4EM');
define('AUTH_SALT',        '4+7RE6%BRb[iLa=$]o=Ms-k,Bx|B/e3k<9elLYv[!d[*}pI81MP wF#gfb{sgXg6');
define('SECURE_AUTH_SALT', '&;yi/_VYrc!Vr()pzac%9983t/9#JQ(4zI{nI5eNu/;!p^R8cu1Tt1(E|ULPKyWx');
define('LOGGED_IN_SALT',   'I$0bdU@e4*36Na-Wr(C=sy=oEBs:fpv8?(QXi3@:7eywW5Gf,2s7/.80uh*X,l:e');
define('NONCE_SALT',       ';_~?mY)Mi7?$dE~RE`}Fu(lUNzyw;2!k%bmvU$_{}Z+Y2;3afHzPnXMU:F%8qu~&');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
