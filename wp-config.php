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
define( 'DB_NAME', 'magaz' );

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
define( 'AUTH_KEY',         'v591S=bePg:&2H<Cgbv86m0Cb6O/dS9B:.e4sDrVUJDs[U;R~>F&=NY#ka!f=hp3' );
define( 'SECURE_AUTH_KEY',  '7-Jfmos^9$3z#:fzpdS:/%lN1l]>5z+&[v<U^Lc@4W>?:V0;DmY77v1W2!}<sO`-' );
define( 'LOGGED_IN_KEY',    'EP`(z11;#<A7qqF,;wreM]Kp1][m5dpE!6s:KQy0bQrk%bH=4Bc8u!.Om&WV5VoB' );
define( 'NONCE_KEY',        'z18C5AJOl:)8P<bj3Ffw1aF;u9gX4TWTkl46h/XrZ{s^Wjau):H7-B]N+-{?=xJA' );
define( 'AUTH_SALT',        '`Rd*>TB!YVGoF0JN_9oj-uue[6;IIapK ,rjzX~h>,~.c@j5,L7%t2SSXK$>)=G#' );
define( 'SECURE_AUTH_SALT', 'pSn5x;h[U)u;rK|7IK:@7%T]wW8Q1Y#i&({_[1:%g1a_m7Mq`l8I67M5;NPyY,hn' );
define( 'LOGGED_IN_SALT',   'G?B1vwo=ta}MAkZs8HhWrRsE1kaHQ^]SF6{<hCfe++,Cq1G!rOwww`qx<^~WBn.K' );
define( 'NONCE_SALT',       ')XV*~y;~iH_g|K8Wv 68Nz5+<0^kku:1&6U#9&Gte@.?YDk41WD`FF#~xW&qdA!t' );

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
