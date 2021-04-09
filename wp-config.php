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
define( 'DB_NAME', 'projetfilrouge' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8FYZ#&-6ei!nyWHoh8>NaPyp14jX.#_2Q0~D<3N7AP2)KUp!ym7`pxd/0XvvAznB' );
define( 'SECURE_AUTH_KEY',  '0^zu$>.>_A1PYd_^o3;d4UjUS%cLOxFDI<yN/sP&`Gt+T28+,wN=kQ3|cr`s7v.e' );
define( 'LOGGED_IN_KEY',    'Z?we[c}P:$N*bz0pR(:e>fwWSAGwcDl]<Zke_!kd:0ZQ*ljNf!$0]bM{JKh@L$N]' );
define( 'NONCE_KEY',        '|`fo(L%s__L7pS*^4Nm5)bHu$PFy@jKl1TPl?v!^Ko Wk,A[07+hY8%=:N4dHAf:' );
define( 'AUTH_SALT',        '#E&|_nG6aHO%@_v/N!gG=XdXSK*_2X,[MadL$)bl AyUS)*/eglF2Ngn5IdiRnU/' );
define( 'SECURE_AUTH_SALT', '%q[PiLO;JE4YP~=_K.~[?-*0 1e+|J./Um2xu?|)FrB,c.R8(~j`_3((-V~d]X:^' );
define( 'LOGGED_IN_SALT',   'iw5wVSJPNp<*iM^;y& VoCT8&i:Ll[}Xd_m3i~_9V*cvsV_b3Vx!4bi-L&r/mnO6' );
define( 'NONCE_SALT',       '4Czp$pjrmX5.6i/#:dNcl$|sQsa^d:`Fc7|$`QydROwd:w,:qTf8Vh,S JjPs%7K' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_pfr';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
