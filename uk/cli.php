<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'Кеш APCu потрібно очистити через Панель Адміністратора.',
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Увімкніть цю опцію, якщо значення параметра конфігурації змінюється занадто часто, для її кешування.',
	'CLI_CONFIG_CURRENT'				=> 'Поточне значення параметру конфігурації. Використовуйте 0 і 1, щоб задавати значення логічного типу (boolean)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успішно видалено параметр конфігурації %s.',
	'CLI_CONFIG_NEW'					=> 'Нове значення параметра конфігурації. Використовуйте 0 і 1, щоб задавати значення логічного типу (boolean)',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Параметр конфігурації %s не існує',
	'CLI_CONFIG_OPTION_NAME'			=> 'Назва параметру конфігурації',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Увімкніть цю опцію, якщо значення повинні виводитись без перекладу рядка в кінці.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Збільшити на величину',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успішно збільшено параметр конфігурації %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не вдалося встановити параметр конфігурації %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успішно встановлено параметр конфігурації %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Вивести список готових і неготових до виконання завдань планувальника (cron).',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Запустити усі готові до виконання завдання планувальника (cron).',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Назва завдання планувальника, яка буде виконана',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Показати всі встановлені і доступні міграції.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Оновити базу даних шляхом застосування міграцій.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Відмінити міграцію.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Видалити параметр конфігурації',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Вимкнути задане розширення.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Увімкнути задане розширення.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Знайти міграції, що не мають залежностей.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Відновлення деревовидної структури форумів і модулів.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Отримати значення параметра конфігурації',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Збільшити значення цілого числа параметра конфігурації',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Вивести список всіх розширень з бази даних і файлової системи.',
	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Назва середовища.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Запустити командний рядок в безпечному режимі (без розширень).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Запустити командний рядок.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Видалити розширення разом з даними.',
	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Виводить список типів тексту, доступних для репарсингу.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Доступні репарсери:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Здійснює репарсинг збереженого тексту за допомогою поточних сервісів text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Тип тексту для репарсингу. Залиште поле порожнім для репарсингу всіх типів.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не зберігати будь-які зміни; тільки вивести передбачуваний результат',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Найменше значення ідентифікатора запису для обробки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Найвище значення ідентифікатора запису для обробки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приблизна кількість записів для обробки за одиницю часу',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Продовжити репарсинг з місця останньої зупинки',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Встановити значення параметру конфігурації в разі, якщо старе значення збігається з поточним',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Встановити значення параметру конфігурації',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Видалити всі існуючі мініатюри.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Створити всі відсутні мініатюри.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Перестворити заново всі мініатюри.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Перевірка наявності оновлень.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Ім\'я розширення для перевірки (з ключем all будуть перевірені всі розширення)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Перевірка оновлень з використанням кешу.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Вибір типу перевірки оновлень (тільки на стабільні версії або включаючи нестабільні).',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Оновити застарілі хеші паролів за допомогою шифрування bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => 'Для "%s" необхідно встановити ознаку "stable" (стабільна) або "unstable" (нестабільна).',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Активувати (або деактивувати) обліковий запис користувача.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Ім\'я користувача облікового запису для активації.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Деактивувати обліковий запис користувача',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Обліковий запис вже активовано.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Обліковий запис вже деактивовано.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Додати нового користувача.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Ім\'я нового користувача',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Пароль нового користувача',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Адреса e-mail нового користувача',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Відправити лист активації новому користувачу (за замовчуванням не відправляється)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Видалити обліковий запис користувача.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Ім\'я користувача для видалення',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Видалити усі повідомлення користувача. Без цієї опції повідомлення користувача не буде видалено.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Відновити видалені імена користувачів.',
	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не вдалося вимкнути розширення %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успішно вимкнено розширення %s',
	'CLI_EXTENSION_DISABLED'			=> 'Розширення %s не увімкнено',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не вдалося увімкнути розширення %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успішно увімкнено розширення %s',
	'CLI_EXTENSION_ENABLED'				=> 'Розширення %s вже увімкнено',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Розширення %s не існує',
	'CLI_EXTENSION_NAME'				=> 'Назва розширення',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не вдалося видалити файли і дані розширення %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успішно видалено файли і дані розширення %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Не вдалось оновити розширення %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Успішно оновлено розширення %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Розширень не знайдено.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Розширення %s неможливо увімкнути.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступні',
	'CLI_EXTENSIONS_DISABLED'			=> 'Вимкнені',
	'CLI_EXTENSIONS_ENABLED'			=> 'Увімкнені',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Успішно відновлено деревовидну структуру форумів і модулів.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Успішно оновлено застарілі хеші паролів з використанням шифрування bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Назва міграції, включаючи простір імен (використовуйте прямий слеш замість зворотного щоб уникнути проблем).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Доступні міграції',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Встановлені міграції',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Показувати тільки доступні міграції',
	'CLI_MIGRATIONS_EMPTY'                  => 'Немає міграцій.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Обробка %1$s (діапазон %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Обробка %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Обробку успішно завершено',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) видалено.',
	'CLI_THUMBNAIL_DELETING'	=> 'Видалення мініатюр',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) пропущено.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) створено.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Створення мініатюр',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'УСі мініатюри було перегенеровано.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Усі мініатюри було видалено.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Мініатюри для створення відсутні.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Мініатюри для видалення відсутні.',

	'CLI_USER_ADD_SUCCESS'		=> 'Успішно додано користувача %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Ви впевнені, що хочете видалити ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Відновлення видалених користувачів',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Відновлення завершено. Немає видалених користувачів, які потрібно відновити.',
		1	=> 'Відновлення завершено. Відновлено %d видалений користувач.',
		2	=> 'Відновлення завершено. Відновлено %d видалених користувачі.',
		3	=> 'Відновлення завершено. Відновлено %d видалених користувачів.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' При необхідності ви можете задати назву завдання планувальника, щоб запускати тільки задане завдання планувальника.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Активувати обліковий запис користувача, або деактивувати за допомогою параметра <info>--deactivate</info>.
Для відправки користувачу листа активації, задайте параметр <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Команда <info>%command.name%</info> додає нового користувача:
При запуску даної команди без параметрів, вам буде запропоновано їх задати.
Для відправки повідомлення email новому користувачу, задайте параметр <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'При відновленні користувачів буде здійснено перевірку всіх облікових записів користувачів на існування видаленого імені. Видалені імена користувачів регістронезалежні, нормалізовані і конвертовані в кодування ASCII.',
));
