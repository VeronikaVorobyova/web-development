<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NF( GN[?vn3BBt[;A-Wali!}v^+eDpcth1lq%_chv3*5@;@ZLnXM(/{+@;aWD5|U' );
define( 'SECURE_AUTH_KEY',  'r7JX_WGa_u0pf>%<> KLC8Ug6`v^;C@]U12s6ha[yDttI51#vt4a%n7J~^{*q6WM' );
define( 'LOGGED_IN_KEY',    '5Bw#l}!Eb=`PM6$$)WK;/QAvjETjLxhis44o>3kGV^gHq5.L(ok)0Md*!Jvr6F:J' );
define( 'NONCE_KEY',        'zs!4)Pg=Q!;8Qkf^:Z/$.gsD X7vjV>tQUj SF!/I8QkxkS+&a(>a +~#m&z`5Df' );
define( 'AUTH_SALT',        '[SOZ8@#`!: l!3QY&`(S(%cKHPH:jmc2k2L(7@s7-j`AyqfXjnPa@T+~r$D h>eX' );
define( 'SECURE_AUTH_SALT', 'yj_wZ>]zsfy#>Wd7k}n>}J^z~T?$t<lXQ:jGW+{Or(KQ$`IG/#RoL?(N vohmJvn' );
define( 'LOGGED_IN_SALT',   '/:.#s8Y`?aAXi/I_w@`#I)R5rg&-:=?jWINxNU}({/xz<^+8+Q7#Wzo;zK<od`tL' );
define( 'NONCE_SALT',       '$&FEd*bKEikNO$)2Vd.^u;B$*-b|C2veoYVD|1+]PBwhbJSJ5Kthxs)9P?;{Xl+7' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
