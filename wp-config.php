<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'annuaire' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Squadra@azzura1' );

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
define( 'AUTH_KEY',         '9XIPIUoH 6k1h|[L{b{UM9snx|TkGs];iC:f}cuyu}X6}!+%Hx_IQO%{QppWF%ki' );
define( 'SECURE_AUTH_KEY',  ' (<L,15_8V}y0``Hc.]1a5E,uX+>T3`:dJc<fr{@BC).55WI9ahR2UQF{0adP/LM' );
define( 'LOGGED_IN_KEY',    'Cr6a{lFZTs2,4}ePbFZ5bvBiOnKi+$bW%ePi9g wRP*yux_j/6t]p[/n?ymK~N ^' );
define( 'NONCE_KEY',        'lURe=-M1M+x%{|pd_]gd@`+($3BTEn$Gqvz3wM0fn(43dkX!!o[XE0Z.R)Ywa`Ml' );
define( 'AUTH_SALT',        '}i8n:_@|Uu/OvWi-]zcu)BEd7Fq(uwa4lGm/`ZZ8x(,Q`>g[$(-TkOQY8q!elX#W' );
define( 'SECURE_AUTH_SALT', '/ *dNpov86DFudWN2QNxC$=q,E>4 2#FKzF)(V;J*3k>s`!GGYv(;{SOvw}J~?}A' );
define( 'LOGGED_IN_SALT',   ':E,m)yg$.,EdiW$QeU_[p<~f3oUH0x=p[I60)C8B==cFGog rmLmgOJ>U1nvZ,:)' );
define( 'NONCE_SALT',       '|.<c}!pH?^51[LLF5,$/)grnMP9@6A `9HXuZ<7Wz]]&J@ea,Q0bwKuixeX(R9pr' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
