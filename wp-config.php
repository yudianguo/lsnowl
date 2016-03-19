<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'lsnowl');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'a123456');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2yE{wWMC<c9x/knRa#c8wbpr$X(?+?i$N{E6KTUa%gDGc#dlxSvO5mhap&x|HE$>');
define('SECURE_AUTH_KEY',  'W@w_X<#ir-F{abEK`_LRX-6A=wDExSj]n4;EZ%)h>FU6=d_$ZpMi{$KMpSpV>}3L');
define('LOGGED_IN_KEY',    'H,!YAP.0b$^,{r_3vK$WtL$!M7h;pXpMUzrd LK/4{ 4SdP`-DFVe;|}I|M; nR@');
define('NONCE_KEY',        '>yZscn01QcvO99e!1`Ydr,y$U.|t5vq&W}r1]NX ^XynH9{rJT;>}t%{_k+t:) P');
define('AUTH_SALT',        'BG-^k;:Fi{6oZBzkp+?Nj:Hd0TL%<#`f@s)V!`is[ jsT^y{n]VV}@Ag#f8dq$WW');
define('SECURE_AUTH_SALT', ']VE+[f~NLpRCG>d1<2,,E[A;HKz4Ct|Fu2z$>u-fZVO&r1UC=IX6063Y X~GTr}{');
define('LOGGED_IN_SALT',   'XN2.#lD02W8F[ko;`}kRVZ+qTs8,b6j3@V=QUl< g9/kb;vHl;I(k-gvKt%oj@b[');
define('NONCE_SALT',       'u+?JRiW7/FQfOIh!:9$@^aI(jW8y^u9>aW&HC!_;{RPX]Cq>]~c,zo(^yAMAW@4^');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'ls_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
