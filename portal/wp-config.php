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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portal' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3308' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ')#tT8z/:ukb:s9j.ez.9SWmM+Q%9+b4!7b[)$@+hF!MY*xn34Z17q}HA?rwcW`r:' );
define( 'SECURE_AUTH_KEY',  '9IO^@rgZ^Dsy9.!sJV3ohbGtLQZmZ0[hZJ)iXdQQ4:|.`>i)hM_ZH$;2j;d}y$-A' );
define( 'LOGGED_IN_KEY',    'TSZ~u<Zg-!}/ULHw~*~l[sJ)I@%<h^f ls{1d2)?}QuSf<iJ=U)=i[04N=s{+{.!' );
define( 'NONCE_KEY',        'a9dG|%{xYLVeEX49AZ<P%B9MbmKL|?6<p))@ZXo:$M5gIZ;H(:=K;y, ih~ |tk|' );
define( 'AUTH_SALT',        'x_>Qqe _sHkNw32pOqg~@krLS0?;*FiNA{`b`DNB7AG@22Y4/vzA >Ec@UsiFsp|' );
define( 'SECURE_AUTH_SALT', 'M^QjNz<@6`.i<{9r)rn.jPH*zUAB<u:%#X;1A<_lP`GP6&f&EES&vlqvLb`yVnP2' );
define( 'LOGGED_IN_SALT',   'L|2~vQaeJ-(,|y$bRn9irc?yJg6vR6nIJpWx]|eXu{KDZspF_6H5o(e72]:ZARP0' );
define( 'NONCE_SALT',       'f0t0Lj:,AruRhnttnrZJ+oB`9a*zsP(F7zJeBM8O;D-@<:joNQ2`ymizt6VY5_x;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
