<?php
/**
 * A configuração de base do WordPress
 *
 * O script de criação do ficheiro wp-config.php usa este ficheiro durante
 * a instalação. Não precisa de usar o site pode copiar este ficheiro como
 * "wp-config.php" e preencher os valores
 *
 * Este ficheiro contém as seguintes variáveis:
 *
 * * Definições de MySQL
 * * Chaves secretas
 * * Prefixo das tabelas nas base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'clubedejudodragao');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' f9Tp 7KuAB`J x9-=)qP[,8:#GS/eM;y9F)4}M.Wds3h=,S+OGDKN $K(bc!Avb');
define('SECURE_AUTH_KEY',  '8.Ml]}-av+E;tolm{ v8ft9eoeH3YKI/;JS*hM*#rpj=_l)pZY,@:PP*i#5iCKlX');
define('LOGGED_IN_KEY',    'YeVn<pvwf]fiL5}+Hm7_yT[1JNLsn{LfEMzsG.:>~CyKhAc3.s9]S53tiBzPA:^!');
define('NONCE_KEY',        '93{F;.?=2mrU..7QH1sn>bRPw,eO0,@%dCHqxb|3_?tibg(&R<cY92pjj)J|j;&3');
define('AUTH_SALT',        '-8d&,KZws ?D/8r-F[!bQs~.;Yt}ci4 x(i_C0vb]_EM}on2TK!$7(!zQrtSXY2e');
define('SECURE_AUTH_SALT', ':L93F(~(VlX[h*{vdR_%8gmcES|D,#.x4xb&W(Y{Sd8uo<RhUD0;Y:&>JGKRupd7');
define('LOGGED_IN_SALT',   'm0p(}ae/;IE5jk,%l/7VK$Xw7h!d j$^e<:x~XS8qZyet^=qk uW0>(u4$*pV-z:');
define('NONCE_SALT',       '`mDrCEu|}$|#L*:Y:FeOunPG*xPQ.tZWz)*dCfUo~$LGH/k*nUZEr<AgQpR?tz^<');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
