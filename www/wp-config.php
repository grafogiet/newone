<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'orelgiet_new');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_]OWht2dwFZmeN.*AV{[oOY3I#J(Km/xqVhCkCE-<`IB&c#]Z<&F[wc!|^m<q*?T');
define('SECURE_AUTH_KEY',  'iP+9>O-GoXB0GRc_1slTh0%P^+M#&96_Ekh)t&=RmMQsIBFK{|uqM}]ElO)aK#`[');
define('LOGGED_IN_KEY',    'Us^eYr,sy>_Vb*B;yQ^;VDGEK*u]`wM#eOew C-~q*`QtLY>qsznU33leb$l]9Ss');
define('NONCE_KEY',        'yl`Ms2lXG/;*bf&L:CpZ2t&j4W[sFc]?3FZ<vTkl8LwT%&gv8w7|>vN!wv{A~B>n');
define('AUTH_SALT',        'q_U^^nO&;Iv_O`.<:^Q6gU}{729o8@ly5x`nS?kl;=%+:aTGvaXS&HxF#/+5?|Hd');
define('SECURE_AUTH_SALT', 'iHVx9.Ei@ <+>vxU}U.T*&N=^ceS4HakE8eC9>Oj =z/=`zAG);j.@{|z*9;*12F');
define('LOGGED_IN_SALT',   'SMeBcpDJ6F6AO x?u(hHr#VlMV!jWS?b} F2m!kL2,9t#w}]} KqWTK?/A*gC?bO');
define('NONCE_SALT',       'Ao>Asmw.]7gY|uxeNVsEL#(C`(>W::sp(cfZ#4MmsK$|?Dz+KRu>XO!:A1$X07@n');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
