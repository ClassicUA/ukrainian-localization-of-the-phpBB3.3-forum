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
	$lang = [];
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

$lang = array_merge($lang, [

	'ACP_STYLES_EXPLAIN'	=> 'Тут ви можете керувати усіма доступними стилями вашого форуму.<br>Зауважте, що ви не можете видалити стиль “<strong>prosilver</strong>”, оскільки цей стиль є основним стилем phpBB і використовується за замовчуванням',

	'CANNOT_BE_INSTALLED'						=> 'Неможливо встановити',
	'CONFIRM_UNINSTALL_STYLES'						=> 'Ви впевнені, що ви хочете відмінити установку стиля?',
	'COPYRIGHT'									=> 'Копірайт',

	'DEACTIVATE_DEFAULT'						=> 'Ви не можете деактивувати стиль за замовчуванням.',
	'DELETE_FROM_FS'						=> 'Видалити з сервера',
	'DELETE_STYLE_FILES_FAILED'						=> 'Виникла помилка при видаленні файлів стилю "%s".',
	'DELETE_STYLE_FILES_SUCCESS'						=> 'Файли стилю "%s" видалено.',
	'DETAILS'									=> 'Інформація',
	'INHERITING_FROM'							=> 'Успадковує від',
	'INSTALL_STYLE'							=> 'Встановити стиль',
	'INSTALL_STYLES'							=> 'Встановити стилі',
	'INSTALL_STYLES_EXPLAIN'							=> 'Тут ви можете встановити нові стилі.<br>Якщо ви не можете знайти потрібний вам стиль у нижчепереліченому списку, переконайтесь чи його встановлено. Якщо стиль не встановлено, переконайтесь чи його було коректно завантажено.',
 	'INVALID_STYLE_ID'							=> 'Невірний ідентифікатор (ID) стилю.',
 
	'NO_MATCHING_STYLES_FOUND'					=> 'Немає відповідних стилів.',
	'NO_UNINSTALLED_STYLE'					=> 'Усі стилі встановлено',

	'PURGED_CACHE'								=> 'Кеш очищено.',

	'REQUIRES_STYLE'								=> 'Цей стиль потребує встановлення стилю "%s".',

	'STYLE_ACTIVATE'								=> 'Активувати',
	'STYLE_ACTIVE'								=> 'Активний',
	'STYLE_DEACTIVATE'								=> 'Деактивувати',
	'STYLE_DEFAULT'									=> 'Встановити як стиль за замовчуванням',
	'STYLE_DEFAULT_CHANGE_INACTIVE'					=> 'Стиль необхідно спочатку активувати перед тим, як встановлювати його як стиль за замовчуванням.',
	'STYLE_ERR_INVALID_PARENT'						=> 'Батьківський стиль невірний.',
	'STYLE_ERR_NAME_EXIST'							=> 'Стиль з такою назвою вже існує.',
	'STYLE_ERR_STYLE_NAME'							=> 'Ви повинні вказати назву для цього стилю.',
	'STYLE_INSTALLED'								=> 'Стиль "%s" успішно встановлено.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'						=> 'Повернутись до списку встановлених стилів.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'						=> 'Встановити інші стилі.',
	'STYLE_NAME'									=> 'Назва стилю',
	'STYLE_NAME_RESERVED'							=> 'Неможливо встановити стиль "%s", оскільки ця назва зарезервована.',
	'STYLE_NOT_INSTALLED'							=> 'Не вдалося встановити стиль "%s".',
	'STYLE_PATH'									=> 'Шлях до стилю',
	'STYLE_UNINSTALL'								=> 'Видалити',
	'STYLE_UNINSTALL_DEPENDENT'						=> 'Стиль "%s" не може бути видалено, оскільки він є батьківським для інших стилів.',
	'STYLE_UNINSTALLED'								=> 'Стиль "%s" успішно видалено.',
	'STYLE_PHPBB_VERSION'							=> 'Версія phpBB',
	'STYLE_USED_BY'									=> 'Використовується (включаючи ботів)',
	'STYLE_VERSION'									=> 'Версія стилю',

	'UNINSTALL_PROSILVER'						=> 'Ви не можете видалити стиль “prosilver”.',
	'UNINSTALL_DEFAULT'							=> 'Ви не можете видалити стиль за замовчуванням.',

	'BROWSE_STYLES_DATABASE'						=> 'Перейти до бази стилів',
]);
