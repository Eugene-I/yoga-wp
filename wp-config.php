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
define( 'DB_NAME', 'yoga' );

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
define( 'AUTH_KEY',         '/{k V|R1Fe<!mho-m5RE;VK#a rvo>woM&5w K6FAEqR1e@K#BCXE*1JO0tf7D[x' );
define( 'SECURE_AUTH_KEY',  'k{ XQk-(,fm3$h[$lt(dgdYC_EE({.D|Ft^0qA3k=OF+# 5h`x:Ha8rb&1V(s%z ' );
define( 'LOGGED_IN_KEY',    '-+}4dA7AeeUB:p>xm+Kg~]&Y@f[$^aJyzOCW6S4PuRQOG@{6ob;Tz6KrO@$E`u]`' );
define( 'NONCE_KEY',        '?rL,Swu`-5jxYwY7w+b88T2E,72%a`yb[P}cD}Kn}rhPo! nT0i8Uk5*2*90UI#7' );
define( 'AUTH_SALT',        'ayw6oUp^{`:Yo+xgFdp@PiQvnaU-[yLd0Nx|OjGNF{~ VfG<~,g&YUX0!Tb)!SH^' );
define( 'SECURE_AUTH_SALT', 'pbr=apTky;V+t8c)+3FQ/N)2Jo<M S:V2l`ejY@^#?D8sOa6o_XsAm:=sm5~H[z5' );
define( 'LOGGED_IN_SALT',   'o3/JUVa7i<8_LeugdcyT<p^IhKF&~%:$jmNB}vdRGEa`+WD0|1p.y ~}Y<^6Qg,h' );
define( 'NONCE_SALT',       'Gspe}1J~nDcnqd?b}nCIQ[[i`_T`UV^^=5g/7Gnw)S*o}Z2+mH93!TUM~-=9rlEF' );

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
