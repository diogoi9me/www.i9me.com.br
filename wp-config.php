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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'i9mec125_homolog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');
	
/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '6x fcz_#gMhBd5:;6gcT+YDZp6BYqk$uY,ewH9yCR*Y)S5R_J^Tgg2X6&G}wXJk,');
define('SECURE_AUTH_KEY',  '*HnMBjY%R]}F6^+A5N^L3h9K)W!r`?0L2CtKm_PT3my.ollINTmD`[;x+_jSJ0;z');
define('LOGGED_IN_KEY',    '!reWe86I<s21TZ+2r83PzE3~l(H&C(jg*$NaHN]#:CKvoeT!ig;+cLdow6@Lw&~[');
define('NONCE_KEY',        ' 2y|3n`toZvY+<Wom~c5k9.#Bt9Y-lq00y3`/_zP H0WI@AH6/2{-BO>5|Xz)bD>');
define('AUTH_SALT',        'eu0[5ye|G:{CMGibcb;4L3C61Sz{|atW{uAGGnw}Xgqt}|f+]s .qQ@ bbYW7T`v');
define('SECURE_AUTH_SALT', 'NKHVq6FOE<7cE?33MZtD_Z>ssT?IvD&xP:d{#,p(oc;aa,b<MBv1{]6Y;FYwiJ;J');
define('LOGGED_IN_SALT',   'e=EUY1H z:y6_c~xJdanr~]KcJN3IsK~>t&n9@r#QbkyeUFq)RFH(ytHH/$3(f=J');
define('NONCE_SALT',       'eo[.atm$/*/RV(d:1N+TrZerjx{mk|xv4%a@rW4V!af5.u*m,Q*o^Q*tgS`W9b.b');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'i9me_wp_';

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
