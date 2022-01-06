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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'timber-wp' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*R-&Vfj2AoC2%woyN{J2(7g^^^lI7]Pncj6/rurfo{q; { b)F%/bS2plN<;[p4V' );
define( 'SECURE_AUTH_KEY',  'F!{yu}r8QKf0YWH)NXkiy-UDOTIhbn4Q`%e_?$l$as=&THZf.+0pnA;L&H<R*9 c' );
define( 'LOGGED_IN_KEY',    '3F+[Dfa)=uhXP6P9L63)tVZ^u^-~/uY8Ju3bXs,>,Z K2}_Evb2GHnNm)!3_*$pH' );
define( 'NONCE_KEY',        'k$MB8<$^NRZ:0@U|e+esNR>?0a,l)uR{im[Hm%bB,,smQV.Z|VAHC$S`p%i!8aaV' );
define( 'AUTH_SALT',        'h)**D.RF;NU^Th5`jJMdQ>$NZi0bihrQ1Zhnpgj.EPi]ZOw,HG9dO1+w<:!D1h+i' );
define( 'SECURE_AUTH_SALT', '8yF*DmUs:nIz>A7z%dq|e?H][%29)WM/Vk[_a(LE~:lZN{CxvN|`6x@~3~OT{[{9' );
define( 'LOGGED_IN_SALT',   '!pn_<LmCYu2DyQo$,=37kH9aq5h> 6,d<}^<[yL>1~G!W@t@V> dw@;@`puY`+eW' );
define( 'NONCE_SALT',       'c><Dr3,@1wPTzUk2Oy#[>(4|N*6}{HY:k:gos#dmTz$=1EF9+v@=$lXk>+~H6$:M' );

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
