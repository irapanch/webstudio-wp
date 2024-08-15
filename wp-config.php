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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '|D 6?O]YY>c1#$FR3CTJ5G$1vfN$GDXB|BPY*3Q@Ma$w7Qn#* <b32^d+e%08n9B' );
define( 'SECURE_AUTH_KEY',  '74ip9|QP5O@KWvP*kGxQ#%a.-/_61!Lw=HW*Cj/TKy4^-VVARh;1f-{ 4`hv7>WP' );
define( 'LOGGED_IN_KEY',    'Uayim]*q%.n~6w10r)LsgAbe:rz5v`rAH&$3cmig-iPNEtUThow@F#Zc+;c7`Pob' );
define( 'NONCE_KEY',        'w8Vu%qM]>j?.]GWs1cb:[obvomP>NxNUCaqR&vB|MZOz^@t]v(l$caC4as}+mXOa' );
define( 'AUTH_SALT',        'uVl4FC<PTnKmYdd8_+X9J_eTD,HgN=B(75UA^fdMIS[G^(,lz;zBh%_Q@#X7Nb[{' );
define( 'SECURE_AUTH_SALT', 'tN#LS_; *CfE@CM5op:~Rg=i;oduDP44CAG=#z>0f>G+%T%E9vo8 XPEk:N,M2S/' );
define( 'LOGGED_IN_SALT',   'eYq;&u}GM6mY+(H1U)VYZ3EjRU%v6,_wI~Qu?mK3a2)OBs~$9wG|tY,.OR$$*iQ5' );
define( 'NONCE_SALT',       'iHTG1+N[qnWl98Jm+QQv[Y3=y2> p20;4sM{t4a*c>oBfgyb=W]J}_4NM{:~tlx=' );

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
