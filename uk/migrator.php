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

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	'CONFIG_NOT_EXIST'					=> 'Параметр конфігурації "%s" не існує.',

	'GROUP_NOT_EXIST'					=> 'Група "%s" не існує.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Встановлення залежностей оновлення %s.',
	'MIGRATION_DATA_DONE'				=> 'Оновлено дані: %1$s; Час: %2$.2f секунд',
	'MIGRATION_DATA_IN_PROGRESS'                => 'Оновлення даних: %1$s; Час: %2$.2f секунд',
	'MIGRATION_DATA_RUNNING'			=> 'Додавання даних: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Оновлення вже було виконано (пропущено): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'В процесі оновлення виникла помилка, яка викликала виключення. Зміни, внесені до появи помилки, було скасовано, але вам рекомендується перевірити форум на помилки.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Неможливо виконати оновлення "%1$s", пропущено оновлення "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Оновлення "%s" не встановлено.',
	'MIGRATION_NOT_VALID'				=> '%s не є коректним оновленням.',
	'MIGRATION_SCHEMA_DONE'				=> 'Оновлено схему: %1$s; Час: %2$.2f секунд',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Встановлення схеми: %1$s; Час: %2$.2f секунд',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Оновлення схеми: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Відмінено оновлення даних: %1$s; Час: %2$.2f секунд',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Відкат оновлення даних: %1$s; Час: %2$.2f секунд',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Відкат оновлення даних: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Відмінено оновлення схеми: %1$s; Час: %2$.2f секунд',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Відкат оновлення схеми: %1$s; Час: %2$.2f секунд',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Відкат оновлення схеми: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Файл оновлення містить помилки. Обробник оператора if не зміг знайти умову.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Файл оновлення містить помилки. Обробник оператора if не зміг виявити коректний запуск кроку оновлення',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Файл оновлення містить помилки. Спроба звернення до функції, яку не можна викликати.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Файл оновлення містить помилки. Не вказано тип оновлення.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Файл оновлення містить помилки. Обраний тип оновлення неможливий.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Файл оновлення містить помилки. Обраний метод оновлення неможливий.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Неможливо виконати оновлення "%1$s", пропущено оновлення "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s не є коректним оновленням.',
	'MIGRATION_SCHEMA_DONE'				=> 'Оновлено​ схему: %1$s; Час: %2$.2f секунд',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Встановлення схеми: %1$s; Час: %2$.2f секунд',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Оновлення схем: %s.',

	'MODULE_ERROR'						=> 'Помилка при створенні модуля: %s',
	'MODULE_EXISTS'						=> 'Модуль вже існує %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Кілька модулів з вказаним іменем батьківського модулю вже існують: %s. Спробуйте використати ключі before/after, щоб уточнити місцезнаходження модуля.',
 	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Обов\'язковий компонент модуля не існує: %2$s',
	'MODULE_NOT_EXIST'					=> 'Обов\'язковий модуль існує: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Не вдалось знайти ідентифікатор батьківського модулю: %s',
	'PERMISSION_NOT_EXIST'				=> 'Право доступу "%s" не існує.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Роль призначена для групи "%1$s" не існує. Ідентифікатор ролі: "%2$s"',

	'ROLE_NOT_EXIST'					=> 'Роль "%s" в системі прав доступу не існує.',
));
