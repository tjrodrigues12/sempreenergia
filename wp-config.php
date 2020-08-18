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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'FdA49Ma%[qe %lH.F3Clm-~W0oC{D5i}Hq1)g.%5 3!_7$QO0,)/pxdPoGY:3g24' );
define( 'SECURE_AUTH_KEY',  '_.B!.S*QFq|,0&oS0&@m&7W8{HJBh[~XvDV16(deenc:TT(&i!y(+glv^hY8]#,B' );
define( 'LOGGED_IN_KEY',    'FzzQ0y6Ux#B/<NJvjZ0RrsJX/-BaNu~.%>cLB^Z@&QUG7njTbF}G/w},lt~vEA)h' );
define( 'NONCE_KEY',        'uAY02B69%#k=SAirGDiB4eIB{(X.`diMHFmi^167gthgoavr(YyMJ<Pwk>_vdY }' );
define( 'AUTH_SALT',        'Lx/)kS]j@Y6F.[u?i$}HCoJ,Wo{-p_4C;h]LM6yy_fKJl[{c;he6RiE#P#c[{6KH' );
define( 'SECURE_AUTH_SALT', '/0u]%s5uT[)@cPc@6X<%YA.6V4%*:mnJu=o@dpS5s<eE2<l,HZArX-YRFHT4tmak' );
define( 'LOGGED_IN_SALT',   'g+ezRw0F4`a!{UpPB@sc#6t<Z}m8cND*M57!+wfwG_Qrmz/`NRdk[di}B$<N/KwC' );
define( 'NONCE_SALT',       'K<XW+Z]~WzolVb62C4k^Jq7ud85p>d%DpFpSa(?%@shddk#blc;~>nPJZC`o4O?L' );

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
