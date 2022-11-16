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
 * * Настройки базы данных
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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '5Ep=kIzDnkM`Lzn$[w#ozatG)F-d@Yk!],=f~?>WqYabp;dwRkzf+wa=4`=i.I3(' );
define( 'SECURE_AUTH_KEY',  'wen+%O-+a!YiLQWF,;H2H6Ptt(~!}hI _NKiGSpUOTnrKcv*3V/k,lfWLd,(b<,.' );
define( 'LOGGED_IN_KEY',    'PM)@vCk@bDWdf`9ADF{d_q3d*7~7;)Ik4O>0#&[mt CL Yw4=%[#1y}!%-bYA~gc' );
define( 'NONCE_KEY',        'AY#zT[w&e:H~F@is;~P~)k4|]Z8/59/).&s%E+)wxX!UZ(aJ/p}cIwLFof# fcU0' );
define( 'AUTH_SALT',        '&-sZ648j;~<>LJ^^m}nB~j+]HyJ5%D]pVjW`BeAim%z-kLfI>]E^nQod:rZE::gu' );
define( 'SECURE_AUTH_SALT', 'dubv@B[Svn1N|cV}?^>3_mO]XErw|7qJ}f$Jn$y{xWJRVIvgXYf7I94n%=wum&b!' );
define( 'LOGGED_IN_SALT',   'qr%-?2:!pc`8Glgf9W(q2M`Ga7p|$H&?ZO_7NQDb^MWeLM!q#jGqm]GLQ6  N7!,' );
define( 'NONCE_SALT',       'SuVj<EZN/AIz,MThq<be(!F9X,rWUq*f/,M)7S0F(5I3@i3`%htFOwoCo|B|pXA1' );

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
