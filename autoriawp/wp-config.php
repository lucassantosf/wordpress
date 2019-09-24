<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'autoriawp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ma?=w7.abpx$*k7u3mB@E4yfQc2[7bmZNZgh9U6[Ej]SQ[pprXwngw?(Wv$53c~Q' );
define( 'SECURE_AUTH_KEY',  'W;rd&dab/(cRWvP7bV0DVIU5m71L+C%R]3 $M` *yF/!ph$xXzPSfsEDB26cLt,r' );
define( 'LOGGED_IN_KEY',    'haPnJM$ svA`Yea8$8=31p/5|/8<kUn~Wm^x0nX3EZ wtS>S-?HIfdwah& Xcuk#' );
define( 'NONCE_KEY',        'L T}aiSYy_4uCAEOtK/#eo 1$$K7JedvV}wm8V^AwX,lZO/C1E5dRe@,eJ1[Hc#Z' );
define( 'AUTH_SALT',        '>qWy Y_x-v*5s}~Ru>|*% ]=,Mj}e3mpvz-DO@CtFtVcPBb}ar#T]%$FHp=X5-SH' );
define( 'SECURE_AUTH_SALT', '/8I[n9+C~30)WPp4B)==O::5[H~Xxo5*nb]D*#.KmS/ew@Aq05t420~9+/zx$XTJ' );
define( 'LOGGED_IN_SALT',   '-^PjGt:3!<KM?Bd5F^U`oNTb*U_/X$,nx*w66@F7c#SDaKAPYb$/M$4BK-MMJ&<O' );
define( 'NONCE_SALT',       '_c~TjJl/<RVkR++SNi+)o7g=jcU~%_91r=M09CPclts#c%I&&9t8NJSAF5!.^gB6' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
