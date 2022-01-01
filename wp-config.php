<?php

define( 'DB_NAME', 'd0385e3f' );
define( 'DB_USER', 'd0385e3f' );
define( 'DB_PASSWORD', 'vBF62Fo6pZXRFcUu' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',          'Zm~Jlfb{dew8tTEDuix{$`H0#[6x^wfclOP$q]4OZ(tdI.YdIgt-+&PU%DJ;#wBY' );
define( 'SECURE_AUTH_KEY',   ':Gb@2iqmOIl;Nm$VR<!Vc|*6{iw:P/endQfxkilxi-N3bAfZmgL.2}_$yJj#kNUd' );
define( 'LOGGED_IN_KEY',     '&; dqyUhR@OONbT:O-eF{<ked|dDXLzW>zc9Ce(PdfQV_|P?ofnyf{|Ejuyk,`}l' );
define( 'NONCE_KEY',         ':I-+m38RGi)d5.=]k Wm3_=lW!l09<F*gp?-Ppz-BH#fO6rjy 7j[/yXUIW<P&vI' );
define( 'AUTH_SALT',         '|38NM_.^{b_3X@l$Yr|!=K4oqY{m_g qnkg&>+ak]}yBsz6aS|?zkNO(x5-Y53ZL' );
define( 'SECURE_AUTH_SALT',  'QeZohgVyugPN4X;8A1ni@[p~OA5E>k>+6jRc%<~G4>l;:Ct}^wX=6HICKL#OL(kk' );
define( 'LOGGED_IN_SALT',    '_]ab1q6E-~_kW5h0Qa([z]*1N=l`A x,X-,| C>SyfZNy<l?NR$~VCS@Pt)cb>*L' );
define( 'NONCE_SALT',        '9ao<Z=>0*_N`Y[Fqu&12cLFGD$7SP.PlsH^*uiE^54nl[AO!%z-Lp,i@tng&E,Bw' );
define( 'WP_CACHE_KEY_SALT', '1&-!^r|7_v`t C n5grq0)qDD.(8jj(v%:!oBY)ft/7jAuc2,i)&Q*gt6jGJV!o}' );

$table_prefix = 'wp_';

define('WP_SITEURL', 'https://citrus.chekka.de');
define('WP_HOME', 'https://citrus.chekka.de');

// define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';