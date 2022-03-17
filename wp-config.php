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
define( 'DB_NAME', 'bd_esperancar' );

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
define( 'AUTH_KEY',         'lXpo.yd 0YAlmhcTTYDZ0GWH+0I[C@X=I41@?,YS:4Do$upWps&QX|/6Z2Za%!)=' );
define( 'SECURE_AUTH_KEY',  'A<<Pqy/zs@16xasuz%>68lUi^D$&G?OV;W3Z HF^$ Sbd(!.<3n{<fAPh h0s_G!' );
define( 'LOGGED_IN_KEY',    'Q%*7->j0fdex}RHGJKX:-_,DyLHA_i5,RX8]=ZdkH3VarfMj>Y8eoJ(w)0]|M22e' );
define( 'NONCE_KEY',        '[lxKMwhRV%U|2-F/-Vg>s)kYhIsA)5vKDne;^/wP2fWjA5N=E9M&6M]/T6WK[yWu' );
define( 'AUTH_SALT',        ',3gI5xH_W+yi^kc(:6>!b]<cVA`(QR5Abf%VNa{))6!3niiYZERtv1?)+TD.8T1{' );
define( 'SECURE_AUTH_SALT', '8uBy?(:9Q8Dy=?-yV ]X~.oDi%Rv$Ztc*#EvOg8[.WXkxqky>f!E<mWgK!H*m)5]' );
define( 'LOGGED_IN_SALT',   '=f*M)d> NNp$yM%6|s|2g3}/-p|$Le+*eRM[S#xFsW2)qKM ?8i6XY<%EUSkOY6h' );
define( 'NONCE_SALT',       '7fOVb<63/?y@G?8WA]on`%OnAZ-YFE{ *v,g/m14AnY_saSK*[W-LN6o}B@M4Z?J' );

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
