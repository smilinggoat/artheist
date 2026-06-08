<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'panicbom_wordpressfb0');

/** MySQL database username */
define('DB_USER', 'panicbom_wordfb0');

/** MySQL database password */
define('DB_PASSWORD', 'dZLfLKzqjidd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/OBlRTXhT)VX{g?^/l=/{lAPO^z*xv@CNqN$D-kC<bU*zY^@=?uU{r-PtMe+Bki@$M}vkK<P-/>?qfZO{*jdISoOcPLN*jesH;-Oqa/-CuS_W&l%H|eP%]bSWzf*?Db^');
define('SECURE_AUTH_KEY', 'sdl(k$Ww>znLoNTWCYu{Nw^OgG=P_q=w@fHE}SfylZ>owEMjJeOD<-hzwS=&iTc]>&lUEdG|}mPnXQqAU=Msq?)>P(EuYNQaUC=Q>e=yGuxYk?*@IPh<=oO(;ZgstPwq');
define('LOGGED_IN_KEY', 'KjY>uUnLFY]HpcY_>_H&uMW<W@;]E!S>[>mhTg=Yk*xb;&wMZg!H(RfEkkNIq+pwaGabWH(@-PZfajEhSA@>?_UMXCSRiNP^vAeRD]$=*)SSRZL@Enj-[jTIi/-Le%Ii');
define('NONCE_KEY', ';__un[N!{Xt;&^tJ()?GraWA<X;es^(??VKXc{ko&fojgNY)-D*/E}@|K@(VDsy{_mGtF_heRH)OL]s}ODPj>MRIQp-B-=|mxdtI<tIlKayqXFyPza(tZbpNsiGh!r<(');
define('AUTH_SALT', 'Ikt<RLf=ysJ^VHOx!uyQOmD!l-IInW+PcN!}^S=Cx[Ue>x^%ID%y%fNlu^HJZOCPXx!gitV&oys{V*(|se*sBPo+w;HlH/zg=qnKbhdh<*/%||hlB]IOpGA^mw?CF/]W');
define('SECURE_AUTH_SALT', 'dFqTd=J?xlA+!MfzclyF_>*pJp?t{ZyUxA+E}ggUm]>D(fBcUeokUg?-F^pk^F(lxr}pR?jHufYTc/$e@SOV-oHtaV*joI}%fBKhME}utol))|f;wvGBaupW<i-dxkBQ');
define('LOGGED_IN_SALT', 'l$txMcArVf(I]&ln$o]>Bjb{c]hEP?]FwY]Q@Y]+!=Mt><<}H;Shl%TVeznRZ>M>UE|i=Au=*AIT-I}^Yzs>nDsntBQok]nHG<Et|gYGHPR;@FMRLGxWi}odejnaCwnw');
define('NONCE_SALT', 'ROPt|GkQ<@RGiO>}pazNJEC*RmYDgPhw-RGpt}QizLaZSAiB[w>=PZ=>cIC&[=)kv{m]d!=?NG*dSyCp}A<(*@Ve>jH%hV_^^I|mvYP|=qShVZV*y{d[c>{iBEWSKHjm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ikbh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
