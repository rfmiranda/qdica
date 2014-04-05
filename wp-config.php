<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bse_qdica');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Rf2009');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~wy&e)-|4vW-Kkg5)SCX*%.t:dTs12~XxNl%OzfZ2+6Uv7x*+xS-h}~sWUy_.Z4y');
define('SECURE_AUTH_KEY',  '}PO03x%bn5tY>t]q||-K^oo{u_wMZg~G2!`qvELf^*bi,-|ip`~3%/=E~|2x{14s');
define('LOGGED_IN_KEY',    '6#W-,}s{3Dp8+I{n)]5^hPs~Cr~dZg+J_eA=V3rW^tvJRzH0em?4oZs,7F+5E7A|');
define('NONCE_KEY',        'y[wFvl[bnTTjO(dv21_hp_g|).,A%F1%`gkAe>jX*=&J+_$7:kJ+(:u/V/hR:JuQ');
define('AUTH_SALT',        '~Wm+2--lH-eQP+TC%-#~[.l3<=CmZsK^:9z7l<zb.hB.(CKB3-.X4Jy|CYn1|ikA');
define('SECURE_AUTH_SALT', ';-!>U166._f@B*zB3)P=:d0DQ[-RGa(n,mco-iIqyTxF(cKN]GrDs-``g+([W%M_');
define('LOGGED_IN_SALT',   'NKspI}+8h9(BsVH/+Bhg?rEA%H.T=GfMcVNe>0S~|6*2<G&R9.IM#(0B2wc$>4qW');
define('NONCE_SALT',       '+0A&*>(VOvr_1-OaUWI0O~m6|/A&Eg|$)7;C5F<| {qNxH|$,12cluS3tQ+Q@_GE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'qdica_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
