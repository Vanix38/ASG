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
define( 'DB_NAME', 'asg' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'NyDdy}4,/T:+q]:#Nh ZuCdWFO.WZgaFS0UIld*,c8&g }`TO[Ub+SgKOOj/}1q:' );
define( 'SECURE_AUTH_KEY',  'a2Cg[0;-;A<:_{U{ehtOrRb??!GT:vtW(-B?(r)P>%S/t*&+F-@ZH0/g}tKH)?[J' );
define( 'LOGGED_IN_KEY',    'R)sy|vx(L1{zIp([?~wc)6z:4yR/CrR5.E.@$CfUYe6<tW%sg|&dp/)W_Lx(jw8E' );
define( 'NONCE_KEY',        '=^fv4m?S(~JgCv/-3Gf(QWH7E4hnk|u;dU(iJ7UJV^CwpQZMC<{Y}!T[Q{+z%GL{' );
define( 'AUTH_SALT',        '_Slu(@T8@zm.j$<I{>qR7QjyVDcTPnwk5IlL7!L*@OiF?x^P5U2K@ 6zFU(zXO**' );
define( 'SECURE_AUTH_SALT', 'TYWL|.&57Ng^2{!`xI_jb+|34O#YOtoQR7Wpdyp%h#~80q+C3;lD1uNb_I4Xe1&R' );
define( 'LOGGED_IN_SALT',   '/.{IkiP@Ycz#v)P}BLH%U}/p!*WD&aUC&j:=;U4f^!u}`6MRHfFHSa!|rKIbK25n' );
define( 'NONCE_SALT',       'f5B>^EUf}@.VZ|<q2Wx.e3sM:<,17#|Iaob&.)g2_kk*2)c2KYp7aC[ dCX3`:8^' );
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
