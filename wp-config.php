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
 define('FS_METHOD', 'direct');


// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bikecraft' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'kallnm28' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'a7x u4 EDeDfJ]8LBh;l]|FL1cM^ipLXWgz%dz]M3^,KYZU:qcde/8!oz|fiH%(z' );
define( 'SECURE_AUTH_KEY',  'lptC`D_J3Y>J&4s?N;Qc`Jb4#;Xlyfyt w4}O@4+k|vtqM6XnBHHGJ%S|uen>pu&' );
define( 'LOGGED_IN_KEY',    '.LJz&Sd:gTa1f:yJqsmeq!=]eMwGp,}S4IDE]6y@]T@Aejs~(p7W3j5g[6v<hTcP' );
define( 'NONCE_KEY',        '__v}MWeVbRXN%5DZV-E`FMX| Sv>k30t#FVVVXcTUyFAbe5TGZDgL]:[%kIQ}Bst' );
define( 'AUTH_SALT',        'XXVIf$8OqLSXqTMeANSprQCV9BjQY@FL|m#-y$ ->HH_6f5;n~&6}3!sU-Cpi:50' );
define( 'SECURE_AUTH_SALT', 'q0_|6ibcErpkshXs8}Z[{|2zwb5mC=g5iV o,chmP.gA%H6o3{._<NK8RU}5kI8_' );
define( 'LOGGED_IN_SALT',   '@mLs{ QK<.~s*Lp^*7|84<p}-#_gtsk6S?ljFhdlfM>sy%vp+;>s|VgGtpYl!is;' );
define( 'NONCE_SALT',       'B/bbE:PQTTI_Vor4FX0i]o}Dk05&-/_kQ3%??K:o19IIIE4$ag{VGw!5uX4i&uB/' );

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

