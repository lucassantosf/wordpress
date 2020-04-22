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
define( 'DB_NAME', 'atua' );

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
define( 'AUTH_KEY',         '5aKOtfz8BDH#>>!G$?pW{*TJ}KB )|fyKYe&Kv9#o/MLGYFL[!*BiL1-IJI3C2dD' );
define( 'SECURE_AUTH_KEY',  'p-]Q]!uf&Aaa`D<w{[E7dU3hUnZa=@IVpqO*-O}=4HE53GL};E~&!W1kZ]PL`L8D' );
define( 'LOGGED_IN_KEY',    '_cZE$pu=gL$YE7!6foD*xrfA3cV27e??/:O8LUPT-w_*A9)WgA>^zhxG!Ggn2-yw' );
define( 'NONCE_KEY',        '-/AcwmC3TEt/8whB$%?-qOO,9GP]cJj)-X1yO9E c3s8g]RCu<Y~f;#E:f7P;u:~' );
define( 'AUTH_SALT',        'Z9G)](kdShhqh1`Cv(_QCvntv!_w`V%@Vz&)B8kjw< x==`)@Yi{H`dEoK~p23LT' );
define( 'SECURE_AUTH_SALT', ')dRTHsiJ ?hty{@N25L&?6gwe.CS)U947F*EA<~&@qDF5n]Q/{O<ImuE3$;KQ<VW' );
define( 'LOGGED_IN_SALT',   '8w,(GMdSj,65Of9d?@, +}XP;$bBVHF>>U*q,tuM[#[$/G3XbyD cofSU@kH|-hL' );
define( 'NONCE_SALT',       '2m+~Wk^4vP1oX 42s,|F@g2^m&aJ%~+VV3T)0J)cOP`H<,fgu@#2n|s5Q-&0y~vK' );

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
