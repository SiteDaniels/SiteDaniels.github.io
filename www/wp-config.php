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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'H,w9_Xd!U3kfE:]2de3w,Nwb!7G]iRq#tjBIT&]c$?f!fz$,>-Xr,`ILtX*t)*nS');
define('SECURE_AUTH_KEY',  'e7FKg*%BYLwKP4 i`;[:4$8j8]W.0Qk^3)goU|S@)z$8<^_~t8iYkta@*#R{qacO');
define('LOGGED_IN_KEY',    'rQ*6pXc7U%jye2 |5]r3CzQH#{Br2mJ#cv)hhO_bAoF!I0jG+`,4c}r%G8U5{i+G');
define('NONCE_KEY',        '?.pl(~=U_bXd7w!+AN*X0bHrEacSZL{Ln ,eD%JH._!ZGn#LH>bO$tQ;/nL2Td6_');
define('AUTH_SALT',        'pC]dX<(P5.Rvq8ih)d`P*zaYy26Yz@jK9~2Zy`us1TEGZ%4vK*24mH!v)+KX!dS;');
define('SECURE_AUTH_SALT', 'B#.DlW`qyQ</-:XU*Vk;3eUQ:G|8}B2AGAj}4!~WneXAl=2RncgF2pi8=px6Ua/@');
define('LOGGED_IN_SALT',   'E|-d(K5w+2:UH=sLZoa(Ng@s-aixVA|j@4,rjAS#Y38%j5@Qx::,TH]0c&[R5p@P');
define('NONCE_SALT',       ':c~|k8:af9=R8WLLJPx}e-_|4R7?Ei:B#R-dQs)uPDqz]$YhMGL9;=+@+[,SHs,S');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = '_';

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
