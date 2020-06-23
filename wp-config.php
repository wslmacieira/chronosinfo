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
define( 'DB_NAME', 'chronosinfo' );

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
define( 'AUTH_KEY',         ' >$Jx+J]4}?#/$+,m(5Bt?CeXK)i#na)bNFqdeT{!~HyXuxP]Xr1L0if{{>=Nk$T' );
define( 'SECURE_AUTH_KEY',  'SkJ|LlMaDpFsd|eF ,5lYg?qsj~?pNRn:Leq71.hhemm&3&H~GOd=0/H65xGptqi' );
define( 'LOGGED_IN_KEY',    '#*;H2Opx}6(wwR`b7`tN81l`;YA2yScJ)2VCupZPTH:=}-1RY!,uAZV]xiKd)JvT' );
define( 'NONCE_KEY',        'A8k))Ztp|BQ1E?w!Q24~tdjc+*;R*J6=D}o<QF&8bc0<G}Jq5Y*$M20g61z()OM/' );
define( 'AUTH_SALT',        'Dz<|rt Wg)*y:SQRDUtm(-%)|*&@d{W,-;6Ep{WwT+NCJh |@-[%OqS*0;KyooC<' );
define( 'SECURE_AUTH_SALT', 'ZPi-fO^|8REfs+.?%l.CXY[7nOZ>[NS`[mr5/Jr!K1%Q`v)V$:rI| WXJCjGG#~i' );
define( 'LOGGED_IN_SALT',   '!|E8VGbupq](dz#k?`+Z/X6nfs?!kndnryEl`%NHM(9T,|:uh*z]BR>x/yV tpTi' );
define( 'NONCE_SALT',       'hLud:pjUCY ?%Pv@B&Y]?b.}Hg~m662ZQ&y9i1=9]b_z}WDbjvO$kL6pHpXs$V8*' );

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
