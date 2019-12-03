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
define( 'DB_NAME', 'diplom' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ft?%]}fW3mofn`ybEt30qMJ(s^X:;bs{_```@t|RLB)(q+?Xw-~vK4-F3(doFq%K' );
define( 'SECURE_AUTH_KEY',  'U,ptKOoA[JBT+6!QTo!>B@)ABrvSybF/6+10e$:HI${V8pI_`ad?[[B|IV e#X6o' );
define( 'LOGGED_IN_KEY',    '=[._STk4J(WSI.)_S-+i%5D/8dV]L0<4K^[03_3YnS9w,FaJUckYuw#x;0hJa2-L' );
define( 'NONCE_KEY',        '[lPNKD&xImOE.3lA`eS<-SWv-vO@2;)DR)6)^kHit`g,%fqR>`9ubV/W~*HJV%y3' );
define( 'AUTH_SALT',        ':hY@G1RemC.8w[0fnF86=X}{i7a_j[EJ0YH e2`~W<.RzuWf#gMe4:iZ4O[nhK1D' );
define( 'SECURE_AUTH_SALT', '~v/d%{3ut2[:%6?w(F#o5M_P!wY1rVoWoJK>N3z(,j>fV||Yj`UrX5]5Wx8a.Z*@' );
define( 'LOGGED_IN_SALT',   'T-Yo>h,>a59~RmsJfj^MUJ$)$zOJ{?&G.PY*r&BE#o#r U/wQw|aTFT!o9%u8Rwm' );
define( 'NONCE_SALT',       '(QEh/CxcG6O_Zet@I{9.0xOvRpe1d{o|n&iW8&Ra=N5X688?Orrx^Qa]RV6_hceE' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
