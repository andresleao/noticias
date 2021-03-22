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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp74\htdocs\noticias\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'noticias_wordpress' );

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
define( 'AUTH_KEY',         'Zd3mEw_s& ;|x6@+s1/y|Y2SLFfX59F7eDINP$d0?fzE}U}xz1F):4#f:i~L-G44' );
define( 'SECURE_AUTH_KEY',  '%(RnOSt)aOY5stw0+dl~{G_j)qG;_jSD33h;!mPw ~T!H)WR8$Bl5&}0gU^;YZ&_' );
define( 'LOGGED_IN_KEY',    '2r,p/w<jD.+jHnS1DpIGy(W# <P2O`O6Dq0f&`%b9+I^-NE;H~I}~;SD~e>nRgSs' );
define( 'NONCE_KEY',        '?dIBZU0`n=O^1T0mq>+-qB>+Ta~kA]6e-yW4f2cX{{(Pq[WZd-{f@hg`:.[r5W!J' );
define( 'AUTH_SALT',        'EgI(GnCSm1Rx+m,a3pbp2ZHs;e23%uGu/`BZImTXQdSNcYYppJaWQdditL>|qY:x' );
define( 'SECURE_AUTH_SALT', 'YNtARRxfw3Cl4cw<.&vORY0Y(]/w.t.2ji~d5|h{n%mHevj:h.[>mytjc1%BY=0;' );
define( 'LOGGED_IN_SALT',   '(BS<EB}2Q%^$WqU/j8y=?@F!!6}A_eYtprxd^IriJuO[ojv6eb-o@KP+b<y]~yL`' );
define( 'NONCE_SALT',       'm<wLMNh#I&Lq^* o.G9  yLD6q+EX<!UEHC`%E<ef,bI5)`^-_9>A(f?_Cv_]Ob:' );

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
