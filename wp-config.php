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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornada-viagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|w,sTUKiJzc]Z-kiF^q fGuFTkMz,)j)z&RW3oe*@{avdH,UnE>vAIvT/=KPn7_8' );
define( 'SECURE_AUTH_KEY',  '{2,!>s%zr9g<kMUNHadnB6foYd+iVNe9t:|p=`0=IEy9G/G >E#3=0}bxXH2gJVr' );
define( 'LOGGED_IN_KEY',    '7EhG92e$gBuK}^@+u/(ff0=/-cxy|haDNae@qIB!]pBEy/2vsd)$Z81;u5<%xhzg' );
define( 'NONCE_KEY',        'kM.V|Tx7)yQIvIm=Y8nwhX}sABV6^g02Iy`AebIvdULtpwC%;M-V^$s,0]^`+L`x' );
define( 'AUTH_SALT',        ';-S~Y|#+)z,Lg$4!Q2#vAZN!A|m9du2lIP@j(M00P:y?2vk]uFlOG)LoCUGD|u/b' );
define( 'SECURE_AUTH_SALT', 'X,4@5,+GB^U,<28-.#[EQoLHwsD r,6;n:Fk<t?ZtRIrKN_cY A5}$G))t CXx4g' );
define( 'LOGGED_IN_SALT',   '_D{:N:xK6LC~CZ1?#k)!zn3FG1?R=k^$eTCQ!H{FP%pw*TZ3h*pfy`[_x7u,t#T@' );
define( 'NONCE_SALT',       'U4}QapyTZX+v?mfU1HG6e;AzvFGje-]0]?I)wdM~/T!< +SVTqE;uwqqi72-#Q=h' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
