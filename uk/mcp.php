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
	'ACTION_NOTE'	=> 'Дія/Примітка',
	'ACTION'	=> 'Дія',
	'ADD_FEEDBACK'	=> 'Додати відгук',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Якщо ви бажаєте написати відгук, будь ласка, заповніть наступну форму. Використовуйте лише звичайний текст; HTML, BBCode, і т.п. не дозволяються.',
	'ADD_WARNING'	=> 'Додати попередження',
	'ADD_WARNING_EXPLAIN'	=> 'Для відправлення попередження цьому учаснику, будь ласка, заповніть наступну форму. Використовуйте лише звичайний текст; HTML, BBCode, і т.п. не дозволяються.',
	'ALL_ENTRIES'	=> 'Усі записи',
	'ALL_NOTES_DELETED'	=> 'Всі відгуки про користувача успішно видалені',
	'ALL_REPORTS'	=> 'Всі скарги',
	'ALREADY_REPORTED'	=> 'Це повідомлення вже було оскаржено',
	'ALREADY_REPORTED_PM' => 'Це приватне повідомлення вже було оскаржено.',
	'ALREADY_WARNED'	=> 'Попередження за це повідомлення вже було винесене',
	'APPROVE'	=> 'Схвалити',
	'APPROVE_POST'	=> 'Схвалити повідомлення',
	'APPROVE_POST_CONFIRM'	=> 'Ви впевнені, що хочете схвалити це повідомлення?',
	'APPROVE_POSTS'	=> 'Схвалити повідомлення',
	'APPROVE_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете схвалити ці повідомлення?',
	'APPROVE_TOPIC'			=> 'Схвалити тему',
	'APPROVE_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете схвалити цю тему?',
	'APPROVE_TOPICS'		=> 'Схвалити теми',
	'APPROVE_TOPICS_CONFIRM'=> 'Ви впевнені, що хочете схвалити обрані теми?',
	'CANNOT_MOVE_SAME_FORUM'	=> 'Ви не можете перемістити тему в форум, в якому вона знаходиться',
	'CANNOT_WARN_ANONYMOUS'	=> 'Ви не можете попереджувати незареєстрованих користувачів (гостей)',
	'CANNOT_WARN_SELF'	=> 'Ви не можете попередити себе',
	'CAN_LEAVE_BLANK'	=> 'Це поле можна залишити порожнім.',
	'CHANGE_POSTER'	=> 'Змінити автора',
 	'CLOSE_PM_REPORT' => 'Закрити скаргу на приватне повідомлення',
 	'CLOSE_PM_REPORT_CONFIRM' => 'Ви впевнені, що хочете закрити скаргу на обране приватне повідомлення?',
 	'CLOSE_PM_REPORTS' => 'Закрити скарги на приватні повідомлення',
 	'CLOSE_PM_REPORTS_CONFIRM' => 'Ви впевнені, що хочете закрити скарги на обрані приватні повідомлення?',
	'CLOSE_REPORT'	=> 'Закрити скаргу',
	'CLOSE_REPORT_CONFIRM'	=> 'Ви впевнені, що хочете закрити обрану скаргу?',
	'CLOSE_REPORTS'	=> 'Закрити скарги',
	'CLOSE_REPORTS_CONFIRM'	=> 'Ви впевнені, що хочете закрити обрані скарги?',
 	'DELETE_PM_REPORT' => 'Видалити скаргу на приватне повідомлення',
 	'DELETE_PM_REPORT_CONFIRM' => 'Ви впевнені, що хочете видалити скаргу на обране приватне повідомлення?',
 	'DELETE_PM_REPORTS' => 'Видалити скарги на приватні повідомлення',
 	'DELETE_PM_REPORTS_CONFIRM' => 'Ви впевнені, що хочете видалити скарги на обрані приватні повідомлення?',
	'DELETE_POSTS'	=> 'Видалити повідомлення',
	'DELETE_REPORT'	=> 'Видалити скаргу',
	'DELETE_REPORT_CONFIRM'	=> 'Ви впевнені, що хочете видалити обрану скаргу?',
	'DELETE_REPORTS'	=> 'Видалити скарги',
	'DELETE_REPORTS_CONFIRM'	=> 'Ви впевнені, що хочете видалити обрані скарги?',
	'DELETE_SHADOW_TOPIC'	=> 'Видалити згадку про переміщену тему',
	'DELETE_TOPICS'	=> 'Видалити обрані теми',
	'DISAPPROVE'	=> 'Відхилити',
	'DISAPPROVE_REASON'	=> 'Причина відмови',
	'DISAPPROVE_POST'	=> 'Відхилити повідомлення',
	'DISAPPROVE_POST_CONFIRM'	=> 'Ви впевнені, що хочете відхилити це повідомлення?',
	'DISAPPROVE_POSTS'	=> 'Відхилити повідомлення',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете відхилити обрані повідомлення?',
	'DISPLAY_LOG'	=> 'Показати записи за останні',
	'DISPLAY_OPTIONS'	=> 'Налаштування відображення',
	'EMPTY_REPORT'	=> 'Ви необхідно ввести опис скарги',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Зауважте, що одну або декілька тем буде видалено з бази даних, оскільки вони не містили або перестануть містити повідомлення',
	'FEEDBACK'	=> 'Відгуки',
	'FORK'	=> 'Створити копію',
	'FORK_TOPIC'	=> 'Створити копію теми',
	'FORK_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете скопіювати цю тему?',
	'FORK_TOPICS'	=> 'Створити копії обраних тем',
	'FORK_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете скопіювати ці теми?',
	'FORUM_DESC'	=> 'Опис',
	'FORUM_NAME'	=> 'Назва форуму',
	'FORUM_NOT_EXIST'	=> 'Обраний вами форум не існує',
	'FORUM_NOT_POSTABLE'	=> 'В обраний вами форум не можна писати повідомлення',
	'FORUM_STATUS'	=> 'Статус форуму',
	'FORUM_STYLE'	=> 'Стиль форуму',
	'GLOBAL_ANNOUNCEMENT'	=> 'Важлива',
	'IP_INFO'	=> 'Інформація про IP-адресу',
	'IPS_POSTED_FROM'	=> 'IP-адреса, з якої було написане повідомлення',
	'LATEST_LOGS'	=> 'Останні 5 дій',
	'LATEST_REPORTED'	=> 'Останні 5 скарг',
 	'LATEST_REPORTED_PMS' => 'Останні 5 скарг на приватні повідомлення',
	'LATEST_UNAPPROVED'	=> 'Останні 5 повідомлень, які потребують схвалення',
	'LATEST_WARNING_TIME'	=> 'Останнє попередження зроблено',
	'LATEST_WARNINGS'	=> 'Останні 5 попереджень',
	'LEAVE_SHADOW'	=> 'Залишити згадку в старому форумі',
	'LIST_REPORTS'				=> array(
		1	=> '%d скарга',
		2	=> '%d скарг',
	),
	'LOCK'	=> 'Закрити',
	'LOCK_POST_POST'	=> 'Заблокувати повідомлення',
	'LOCK_POST_POST_CONFIRM'	=> 'Ви впевнені, що хочете заборонити редагування цього повідомлення?',
	'LOCK_POST_POSTS'	=> 'Заблокувати обрані повідомлення',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете заборонити редагування обраних повідомлень?',
	'LOCK_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете закрити цю тему?',
	'LOCK_TOPICS'	=> 'Закрити обрані теми',
	'LOCK_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете закрити обрані теми?',
	'LOGVIEW_VIEWPOST'			=> 'Переглядає повідомлення',
	'LOGS_CURRENT_TOPIC'	=> 'Переглядає логи теми:',
	'LOGIN_EXPLAIN_MCP'	=> 'Для модерування форуму вам необхідно залогуватись.',
	'LOGVIEW_VIEWTOPIC'	=> 'Переглянути тему',
	'LOGVIEW_VIEWLOGS'	=> 'Переглянути лог теми',
	'LOGVIEW_VIEWFORUM'	=> 'Переглянути форум',
	'LOOKUP_ALL'	=> 'Переглянути хости для усіх IP-адрес',
	'LOOKUP_IP'	=> 'Переглянути хост для IP-адреси',
	'MARKED_NOTES_DELETED'	=> 'Усі помічені відгуки про користувача успішно видалено',
	'MCP_ADD'	=> 'Додати попередження',
	'MCP_BAN'	=> 'Бан',
	'MCP_BAN_EMAILS'	=> 'Бан адрес e-mail',
	'MCP_BAN_IPS'	=> 'Бан IP-адрес',
	'MCP_BAN_USERNAMES'	=> 'Бан імен користувачів',
	'MCP_LOGS'	=> 'Логи модератора',
	'MCP_LOGS_FRONT'	=> 'Головна сторінка',
	'MCP_LOGS_FORUM_VIEW'	=> 'Логи форуму',
	'MCP_LOGS_TOPIC_VIEW'	=> 'Логи тем',
	'MCP_MAIN'	=> 'Головна',
	'MCP_MAIN_FORUM_VIEW'	=> 'Переглянути форум',
	'MCP_MAIN_FRONT'	=> 'Головна сторінка',
	'MCP_MAIN_POST_DETAILS'	=> 'Інформація про повідомлення',
	'MCP_MAIN_TOPIC_VIEW'	=> 'Переглянути тему',
	'MCP_MAKE_ANNOUNCEMENT'	=> 'Змінити на “Оголошення”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип цієї теми на “Оголошення”?',
	'MCP_MAKE_ANNOUNCEMENTS'	=> 'Змінити на “Оголошення”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип обраних тем на “Оголошення”?',
	'MCP_MAKE_GLOBAL'	=> 'Змінити на “Важлива”',
	'MCP_MAKE_GLOBAL_CONFIRM'	=> 'Ви впевнені, що хочете змінити ти цієї теми на “Важлива”?',
	'MCP_MAKE_GLOBALS'	=> 'Змінити на “Важливі”',
	'MCP_MAKE_GLOBALS_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип обраних тем на “Важливі”?',
	'MCP_MAKE_STICKY'	=> 'Змінити на “Прикріплена”',
	'MCP_MAKE_STICKY_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип цієї теми на “Прикріплена”?',
	'MCP_MAKE_STICKIES'	=> 'Змінити на “Прикріплені”',
	'MCP_MAKE_STICKIES_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип обраних тем на “Прикріплені”?',
	'MCP_MAKE_NORMAL'	=> 'Змінити на “Звичайна тема”',
	'MCP_MAKE_NORMAL_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип цієї теми на “Звичайна”?',
	'MCP_MAKE_NORMALS'	=> 'Змінити на “Звичайні теми”',
	'MCP_MAKE_NORMALS_CONFIRM'	=> 'Ви впевнені, що хочете змінити тип обраних тем на “Звичайні теми”?',
	'MCP_NOTES'	=> 'Відгуки про користувача',
	'MCP_NOTES_FRONT'	=> 'Головна сторінка',
	'MCP_NOTES_USER'	=> 'Інформація про учасника',
	'MCP_PM_REPORTS' => 'Скарги на приватні повідомлення',
	'MCP_PM_REPORT_DETAILS' => 'Інформація про скарги на ПП',
	'MCP_PM_REPORTS_CLOSED' => 'Закриті скарги на ПП',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN' => 'Це список усіх переглянутих і закритих скарг на приватні повідомлення.',
	'MCP_PM_REPORTS_OPEN' => 'Відкриті скарги на ПП',
	'MCP_PM_REPORTS_OPEN_EXPLAIN' => 'Це список усіх скарг на приватні повідомлення, які ще не були розглянуті.',
	'MCP_POST_REPORTS'	=> 'На це повідомлення надійшли скарги',
	'MCP_REPORTS'	=> 'Повідомлення, на які надійшли скарги',
	'MCP_REPORT_DETAILS'	=> 'Інформація про скаргу',
	'MCP_REPORTS_CLOSED'	=> 'Закриті скарги',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Це список усіх скарг, які вже були розглянуті',
	'MCP_REPORTS_OPEN'	=> 'Відкриті скарги',
	'MCP_REPORTS_OPEN_EXPLAIN'	=> 'Це список усіх скарг, які ще не були розглянуті',
	'MCP_QUEUE'	=> 'Черга на модерування',
	'MCP_QUEUE_APPROVE_DETAILS'	=> 'Інформація про схвалення',
	'MCP_QUEUE_UNAPPROVED_POSTS'	=> 'Повідомлення, які чекають схвалення',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Це список повідомлень, які потребують схвалення перед тим як вони будуть видимі іншим користувачам',
	'MCP_QUEUE_UNAPPROVED_TOPICS'	=> 'Теми, які чекають схвалення',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Це список тем, які потребують схвалення перед тим як вони будуть видимі іншим користувачам',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Видалені повідомлення',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Це список усіх повідомлень, видалених в смітник. Ви можете відновити або назавжди видалити ці повідомлення.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Видалені теми',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Це список усіх тем, видалених в смітник. Ви можете відновити або назавжди видалити ці повідомлення.',
	'MCP_VIEW_USER'	=> 'Переглянути попередження конкретного учасника',
	'MCP_WARN'	=> 'Попередження',
	'MCP_WARN_FRONT'	=> 'Головна сторінка',
	'MCP_WARN_LIST'	=> 'Список попереджень',
	'MCP_WARN_POST'	=> 'Попередження за конкретне повідомлення',
	'MCP_WARN_USER'	=> 'Попередити учасника',
	'MERGE_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете перемістити обрані повідомлення?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Використовуючи нижчевказану форму, ви можете перемістити обрані повідомлення в іншу тему. Їх буде від\'єднано від цієї теми та приєднано до іншої. Ці повідомлення відображатимуться в темі згідно часу їх додавання.<br />Будь ласка, введіть номер відповідної теми або натисніть "Обрати тему" для пошуку',
	'MERGE_TOPIC_ID'	=> 'Номер теми для об\'єднання повідомлень',
	'MERGE_TOPICS'	=> 'Об\'єднати теми',
	'MERGE_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете об\'єднати обрані теми?',
	'MODERATE_FORUM'	=> 'Модерувати форум',
	'MODERATE_TOPIC'	=> 'Модерувати тему',
	'MODERATE_POST'	=> 'Модерувати повідомлення',
	'MOD_OPTIONS'	=> 'Налаштування модератора',
	'MORE_INFO'	=> 'Додаткова інформація',
	'MOST_WARNINGS'	=> 'Учасники з найбільшою кількістю попереджень',
	'MOVE_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете перемістити обрану тему в новий форум?',
	'MOVE_TOPICS'	=> 'Перемістити обрані теми',
	'MOVE_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете перемістити обрані теми в новий форум?',
	'NOTIFY_POSTER_APPROVAL'	=> 'Повідомити автора про схвалення?',
	'NOTIFY_POSTER_DISAPPROVAL'	=> 'Повідомити автора про відхилення?',
	'NOTIFY_USER_WARN'	=> 'Повідомити учасника про попередження?',
	'NOT_MODERATOR'	=> 'Ви не є модератором цього форуму',
	'NO_DESTINATION_FORUM'	=> 'Будь ласка, оберіть форум',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Форум призначення недоступний.',
	'NO_ENTRIES'	=> 'Немає записів',
	'NO_FEEDBACK'	=> 'Немає відгуків про цього учасника',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Вам необхідно обрати тему для об\'єднання повідомлень',
	'NO_MATCHES_FOUND'	=> 'Збігів не знайдено',
	'NO_POST'	=> 'Вам необхідно обрати повідомлення для того, щоб попередити користувача за повідомлення',
	'NO_POST_REPORT'	=> 'Скарг на це повідомлення не надходило.',
	'NO_POST_SELECTED'	=> 'Вам необхідно обрати хоча б одне повідомлення для цієї дії',
	'NO_POSTS_DELETED'				=> 'Немає видалених повідомлень.',
	'NO_POSTS_QUEUE'				=> 'Немає повідомлень, які потребували б схвалення.',
	'NO_REASON_DISAPPROVAL'	=> 'Будь ласка, вкажіть причину відхилення',
	'NO_REPORT'	=> 'Рапортів не знайдено',
	'NO_REPORT_SELECTED'	=> 'Ви повинні обрати хоча б один рапорт для того, щоб виконати цю дію.',
	'NO_REPORTS'	=> 'Немає скарг',
	'NO_TOPICS_DELETED'				=> 'Немає видалених тем.',
	'NO_TOPICS_QUEUE'	=> 'Немає тем',
	'NO_TOPIC_ICON'	=> 'Немає',
	'NO_TOPIC_SELECTED'	=> 'Ви повинні обрати хоча б одну тему для здійснення цієї дії',
	'ONLY_TOPIC'	=> 'Тільки тему "%s"',
	'OTHER_USERS'	=> 'Користувачі, які пишуть з цього IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "Дію %s заборонено в режимі швидкої модерації",

	'PM_REPORT_CLOSED_SUCCESS' => 'Обрану скаргу на приватне повідомлення успішно закрито.', 
	'PM_REPORT_DELETED_SUCCESS' => 'Обрану скаргу на приватне повідомлення успішно видалено.', 
	'PM_REPORTED_SUCCESS' => 'Повідомлення щодо цього приватного повідомлення успішно відправлено.', 
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Обрані скарги на приватні повідомлення успішно закрито.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Обрані скарги на приватні повідомлення успішно видалено.', 
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Скарги на приватні повідомлення відсутні.',
		1	=> 'Всього <strong>1</strong> скарга на приватні повідомлення.',
		2	=> 'Всього <strong>%d</strong> скарг на приватні повідомлення.',
	),
	'PM_REPORT_DETAILS' => 'Подробиці про скаргу на приватне повідомлення',
	'POSTER'	=> 'Автор',
	'POSTS_APPROVED_SUCCESS'	=> 'Обрані повідомлення схвалено',
	'POSTS_DELETED_SUCCESS'	=> 'Обрані повідомлення успішно видалено з бази даних',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Обрані повідомлення відхилено',
	'POSTS_LOCKED_SUCCESS'	=> 'Обрані повідомлення успішно заблоковано',
	'POSTS_MERGED_SUCCESS'	=> 'Обрані повідомлення об\'єднано',
	'POSTS_PER_PAGE'	=> 'Тем на сторінку',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Поставте 0 для перегляду усіх повідомлень)',
	'POSTS_RESTORED_SUCCESS'	=> 'Обрані повідомлення успішно відновлено.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Обрані повідомлення успішно розблоковано.',
	'POST_APPROVED_SUCCESS'	=> 'Обране повідомлення схвалено',
	'POST_DELETED_SUCCESS'	=> 'Обране повідомлення успішно видалено з бази даних',
	'POST_DISAPPROVED_SUCCESS'	=> 'Обране повідомлення відхилено',
	'POST_LOCKED_SUCCESS'	=> 'Тему успішно закрито',
	'POST_NOT_EXIST'	=> 'Повідомлення не існує',
	'POST_REPORTED_SUCCESS'	=> 'Скарга на це повідомлення успішно відправлена',
	'POST_RESTORED_SUCCESS'		=> 'Повідомлення успішно відновлено.',
	'POST_UNLOCKED_SUCCESS'	=> 'Тему успішно відкрито',
	'READ_USERNOTES'	=> 'Відгуки про учасника',
	'READ_WARNINGS'	=> 'Попередження учасника',
	'REPORTER'	=> 'Автор скарги',
	'REPORTED'	=> 'Скарга відправлена',
	'REPORTED_BY'	=> 'Скарга відправлена',
	'REPORTED_ON_DATE'	=> 'від',
	'REPORTS_CLOSED_SUCCESS'	=> 'Обрані скарги успішно закрито.',
	'REPORTS_DELETED_SUCCESS'	=> 'Обрані скарги успішно видалено.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Немає скарг для розгляду.',
		1	=> 'Всього <strong>1</strong> скарга для розгляду',
		2	=> 'Всього <strong>%d</strong> скарг для розгляду',
	),
	'REPORT_CLOSED'	=> 'Ця скарга вже була закрита раніше.',
	'REPORT_CLOSED_SUCCESS'	=> 'Обрану скаргу успішно закрито.',
	'REPORT_DELETED_SUCCESS'	=> 'Обрану скаргу успішно видалено.',
	'REPORT_DETAILS'	=> 'Інформація про скаргу',
	'REPORT_MESSAGE'	=> 'Поскаржитись на це повідомлення',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Використовуйте цю форму для відправлення скарги на обране приватне повідомлення. Використовуйте скарги лише у випадках, коли якесь з повідомлень порушує правила форуму.',
	'REPORT_NOTIFY'	=> 'Повідомте мене',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Вас буде проінформовано, коли вашу скаргу буде розглянуто',
	'REPORT_POST_EXPLAIN'	=> 'Використовуйте цю форму для відправки скарги модераторам та адміністраторам форуму. Використовуйте скарги лише у випадках, коли якесь з повідомлень порушує правила форуму.',
	'REPORT_REASON'	=> 'Причина скарги',
	'REPORT_TIME'	=> 'Час направлення скарги',
	'RESTORE'					=> 'Відновити',
	'RESTORE_POST'				=> 'Відновити повідомлення',
	'RESTORE_POST_CONFIRM'		=> 'Ви впевнені, що хочете відновити це повідомлення?',
	'RESTORE_POSTS'				=> 'Відновити повідомлення',
	'RESTORE_POSTS_CONFIRM'		=> 'Ви впевнені, що хочете відновити обрані повідомлення?',
	'RESTORE_TOPIC'				=> 'Відновити тему',
	'RESTORE_TOPIC_CONFIRM'		=> 'Ви впевнені, що хочете відновити цю тему?',
	'RESTORE_TOPICS'			=> 'Відновити теми',
	'RESTORE_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете відновити обрані теми?',
	'RESYNC'	=> 'Синхронізувати',
	'RETURN_MESSAGE'	=> '%sПовернутись до повідомлення%s',
	'RETURN_NEW_FORUM'	=> '%sПерейти до нового форуму%s',
	'RETURN_NEW_TOPIC'	=> '%sПерейти до нової теми%s',
 	'RETURN_PM' => '%sПовернутись до приватного повідомлення%s',
	'RETURN_POST'	=> '%sПовернутись до повідомлення%s',
	'RETURN_QUEUE'	=> '%sПовернутись до черги%s',
	'RETURN_REPORTS'	=> '%sПовернутись до скарг%s',
	'RETURN_TOPIC_SIMPLE'	=> '%sПовернутись до теми%s',
	'SEARCH_POSTS_BY_USER'	=> 'Пошук повідомлень по',
	'SELECT_ACTION'	=> 'Оберіть потрібну дію',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Будь ласка, оберіть форум, в якому ви хочете розмістити важливі теми.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Одна або декілька тем обрані як важливі. Будь ласка, оберіть форум, в якому ви хочете розмістити важливі теми.',
	'SELECT_MERGE'	=> 'Оберіть для об\'єднання',
	'SELECT_TOPICS_FROM'	=> 'Обрати теми з',
	'SELECT_TOPIC'	=> 'Оберіть тему',
	'SELECT_USER'	=> 'Оберіть учасника',
	'SORT_ACTION'	=> 'Лог дій',
	'SORT_DATE'	=> 'Дата',
	'SORT_IP'	=> 'IP-адреса',
	'SORT_WARNINGS'	=> 'Попередження',
	'SPLIT_AFTER'	=> 'Відокремити тему, починаючи з обраного повідомлення і далі',
	'SPLIT_FORUM'	=> 'Форум для нової теми',
	'SPLIT_POSTS'	=> 'Відокремити обрані повідомлення',
	'SPLIT_SUBJECT'	=> 'Нова назва теми',
	'SPLIT_TOPIC_ALL'	=> 'Відокремити тему з обраних повідомлень',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Ви впевнені, що хочете розділити цю тему?',
	'SPLIT_TOPIC_BEYOND'	=> 'Розділити тему до обраного повідомлення',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'Ви впевнені, що хочете розділити тему до обраного повідомлення?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Використовуючи нижчеподану форму, ви можете розділити тему на дві шляхом вибору окремих повідомлень або шляхом відокремлення повідомлень, починаючи з обраного',
 	'THIS_PM_IP'				=> 'IP-адреса цього приватного повідомлення',
	'THIS_POST_IP'	=> 'IP-адреса цього повідомлення',
	'TOPICS_APPROVED_SUCCESS'	=> 'Обрані теми схвалено',
	'TOPICS_DELETED_SUCCESS'	=> 'Обрані теми успішно видалено з бази даних',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Обрані теми відхилено',
	'TOPICS_FORKED_SUCCESS'	=> 'Обрані теми успішно скопійовано',
	'TOPICS_LOCKED_SUCCESS'	=> 'Обрані теми закрито',
	'TOPICS_MOVED_SUCCESS'	=> 'Обрані теми успішно переміщено',
	'TOPICS_RESYNC_SUCCESS'	=> 'Обрані теми синхронізовано',
	'TOPICS_TYPE_CHANGED'	=> 'Тип тем успішно змінено.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Обрані теми відкрито',
	'TOPIC_APPROVED_SUCCESS'	=> 'Обрану тему схвалено',
	'TOPIC_DELETED_SUCCESS'	=> 'Обрану тему успішно видалено з бази даних',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Обрану тему відхилено',
	'TOPIC_FORKED_SUCCESS'	=> 'Обрану тему успішно скопійовано',
	'TOPIC_LOCKED_SUCCESS'	=> 'Обрану тему закрито',
	'TOPIC_MOVED_SUCCESS'	=> 'Обрану тему успішно переміщено',
	'TOPICS_RESTORED_SUCCESS'	=> 'Обрані теми успішно відновлено.',
	'TOPIC_NOT_EXIST'	=> 'Обрана тема не існує',
	'TOPIC_RESTORED_SUCCESS'	=> 'Обрану тему успішно відновлено.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Обрану тему синхронізовано',
	'TOPIC_SPLIT_SUCCESS'	=> 'Обрану тему успішно розділено',
	'TOPIC_TIME'	=> 'Час створення теми',
	'TOPIC_TYPE_CHANGED'	=> 'Тип теми успішно змінено.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Обрану тему відкрито',
	'TOTAL_WARNINGS'	=> 'Всього попереджень',
	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Немає повідомлень, які очікують схвалення.',
		1	=> 'Всього <strong>1</strong> повідомлення, яке очікує схвалення',
		2	=> 'Всього <strong>%d</strong> повідомлень, які очікують схвалення.',
	),
	'UNLOCK'	=> 'Відкрити',
	'UNLOCK_POST'	=> 'Розблокувати повідомлення',
	'UNLOCK_POST_EXPLAIN'	=> 'Дозволити редагування',
	'UNLOCK_POST_POST'	=> 'Розблокувати повідомлення',
	'UNLOCK_POST_POST_CONFIRM'	=> 'Ви впевнені, що хочете дозволити редагування цього повідомлення?',
	'UNLOCK_POST_POSTS'	=> 'Розблокувати обрані повідомлення',
	'UNLOCK_POST_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете дозволити редагування цих повідомлень?',
	'UNLOCK_TOPIC'	=> 'Відкрити тему',
	'UNLOCK_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете відкрити цю тему?',
	'UNLOCK_TOPICS'	=> 'Відкрити обрані теми',
	'UNLOCK_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете відкрити усі обрані теми?',
	'USER_CANNOT_POST'	=> 'Ви не можете писати повідомлення у цьому форумі',
	'USER_CANNOT_REPORT'	=> 'Ви не можете писати скарги у цьому форумі',
	'USER_FEEDBACK_ADDED'	=> 'Відгук про учасника успішно додано.',
	'USER_WARNING_ADDED'	=> 'Учасника було успішно попереджено.',
	'VIEW_DETAILS'	=> 'Переглянути інформацію',
 	'VIEW_PM' => 'Переглянути приватне повідомлення',
	'VIEW_POST'            => 'Переглянути повідомлення',
	'WARNED_USERS'	=> 'Попереджені учасники',
	'WARNED_USERS_EXPLAIN'	=> 'Це список учасників, для яких терміни попереджень ще не минули',
	'WARNING_PM_BODY'	=> 'Це попередження, зроблене вам адміністратором або модератором цього сайту.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Вам зробили попередження',
	'WARNING_POST_DEFAULT'	=> 'Це попередження стосується наступного повідомлення, написаного вами: %s',
	'NO_WARNINGS'	=> 'Немає попереджень',
	'YOU_SELECTED_TOPIC'	=> 'Ви обрали тему номер %d: %s',

	'report_reasons'	=> array(

		'TITLE'	=> array(
			'WAREZ'	=> 'Варез',
			'SPAM'	=> 'Спам',
			'OFF_TOPIC'	=> 'Оффтопік',
			'OTHER'	=> 'Інше',
		),


		'DESCRIPTION'	=> array(
			'WAREZ'	=> 'Повідомлення містить посилання на незаконне або піратське програмне забезпечення',
			'SPAM'	=> 'Повідомлення має єдину мету - реклама вебсайту або іншої продукції, товарів чи послуг',
			'OFF_TOPIC'	=> 'Повідомлення не має відношення до теми, яка обговорюється',
			'OTHER'	=> 'Причина не відноситься до жодної з перерахованих, будь ласка, скористайтесь полем для опису',
		),
	),
));
