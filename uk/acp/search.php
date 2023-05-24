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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Тут ви можете керувати індексацією пошуку. Оскільки використовується лише один механізм, видаліть усі індекси, які ви не використовуєте. Після зміни деяких налаштувань пошуку (наприклад кількості мінімуму/максимуму символів) є зміст повторно створити індекс для відтворення цих змін.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Тут ви можете встановити, який механізм пошуку буде використовуватись для індексування повідомлень та здійснення пошуку. Ви можете задавати різні налаштування, які можуть впливати на кількість ресурсів необхідних для цих дій. Деякі з цих налаштувань однакові для усіх механізмів пошуку.',

	'COMMON_WORD_THRESHOLD'					=> 'Поріг загальних слів',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Слова, які найчастіше зустрічаються в повідомленнях, будуть прийматись за загальні. Загальні слова ігноруються в пошукових запитах. Встановіть значення нуль для вимкнення. Працює при кількості повідомлень більше 100. Якщо ви хочете, щоб слова, котрі наразі визначені як загальні, були переглянуті, вам необхідно створити заново індекс.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Ви впевнені, що бажаєте перемикнутись на інший механізм пошуку? Після зміни механізму пошуку вам потрібно створити індекс для нового механізму. Якщо ви не плануєте переключатись назад на старий механізм пошуку, ви можете видалити індекс попереднього механізму для зменшення розміру бази даних.',
	'CONTINUE_DELETING_INDEX'				=> 'Продовжити попередній процес видалення індексу',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Процес видалення індексу розпочато. Для доступу до сторінки індексування пошуку, вам необхідно дочекатись завершення процесу або відмінити його.',
	'CONTINUE_INDEXING'						=> 'Продовжити попередній процес індексування',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Процес індексування розпочато. Для доступу до сторінки індексування пошуку, вам необхідно дочекатись завершення процесу або відмінити його.',
	'CREATE_INDEX'							=> 'Створити індекси',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Кількість символів в результатах пошуку',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Кількість символів, яким буде обмежений текст повідомлень в результатах пошуку. Введіть 0 для виведення повного тексту повідомлень.',
	'DELETE_INDEX'							=> 'Видалити індекси',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Видалення індексу в процесі',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Відбувається видалення пошукового індексу. Це може тривати декілька хвилин.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Механізм повнотекстового пошуку MySQL може використовуватись з MySQL4 та вище.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Повнотекстові індекси MySQL можуть використовуватися тільки з таблицями MyISAM або InnoDB. Для використання повнотекстових індексів з таблицями InnoDB потрібно MySQL 5.6.8 або пізнішої версії.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Загальна кількість проіндексованих повідомлень',
 	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Слова з такою мінімальною кількістю символів буде проіндексовано для пошуку. Лише ви або ваш хостер може змінювати це налаштування, змінюючи конфігурацію MySQL.',
        'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Слова з кількістю символів більше вказаної не буде проіндексовано  для пошуку. Лише ви або ваш хостер може змінювати це налаштування, змінюючи конфігурацію MySQL.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Механізм повнотекстового пошуку PostgreSQL може бути використано тільки з PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Загальна кількість проіндексованих повідомлень',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Версія PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Профіль конфігурації повнотекстового пошуку:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Мінімальна довжина пошукового запиту',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Максимальна довжина пошукового запиту',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Для даного пошукового механізму потрібний PostgreSQL версії 8.3 і вище.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Профіль конфігурації повнотекстового пошуку, який використовується для визначення синтаксичного аналізатора і словника.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Слова, які складаються з не меншої кількості символів, ніж вказано, буде включено в запит до бази даних.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Слова, які складаються з не більшої кількості символів, ніж вказано, буде включено в запит до бази даних.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Налаштуйте наступні параметри для створення файлу конфігурації sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Шлях до папки з даними',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Вказаний шлях буде використано для зберігання індексів і файлів журналів. Необхідно створити дану папку поза межами веб-доступних каталогів (Шлях повинен завершуватись правим слешем)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Кількість повідомлень у часто оновлюваному дельта-індексі',
	'FULLTEXT_SPHINX_HOST'					=> 'Сервер Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Сервер, на якому запущено процес sphinx (searchd). Залиште значення порожнім для використання локального сервера за замовчуванням',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Обмеження пам\'яті для процесу індексування',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Дане значення повинне бути завжди меншим за доступний серверу об\'єм оперативної пам\'яті. Якщо виникають проблеми з продуктивністю, це може бути пов\'язано з надмірним споживанням ресурсів процесом індексування. Зменшення об\'єму доступної для нього пам\'яті може знизити навантаження на сервер.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Кількість повідомлень в основному індексі',
	'FULLTEXT_SPHINX_PORT'					=> 'Порт Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Порт, по якому доступний процес sphinx (searchd). Залиште значення порожнім для використання порту за замовчуванням 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Пошуковий механізм sphinx для phpBB підтримує лише MySQL і PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Файл конфігурації Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Вміст для створення файлу конфігурації sphinx. Ці дані повинні бути збережені в в файлі sphinx.conf, який використовується пошуковим процесом sphinx.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Шлях до папки даних sphinx не задано. Будь ласка, задайте шлях для створення файлу конфігурації.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Загальні налаштування пошуку',
	'GO_TO_SEARCH_INDEX'					=> 'Перейти на сторінку індексування пошуку',

	'INDEX_STATS'							=> 'Статистика індексування',
	'INDEXING_IN_PROGRESS'					=> 'Індексування в процесі',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Відбувається індексування усіх повідомлень форуму. Це може тривати від декількох хвилин до декількох годин залежно від розмірів бази даних вашого форуму.',

	'LIMIT_SEARCH_LOAD'						=> 'Обмеження пошуку при високому завантаженні системи',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Якщо завантаження системи протягом 1 хвилини перевищить це значення, сторінка пошуку перейде в офлайн, 1.0 відповідає ~100% завантаженню процесора. Це функціонує лише на UNIX-серверах.',

	'MAX_SEARCH_CHARS'						=> 'Максимальна кількість символів для індексування',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Слова з такою або меншою кількістю символів будуть проіндексовані для пошуку.',
        'MAX_NUM_SEARCH_KEYWORDS'            => 'Максимальна кількість ключових слів',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => 'Максимальна кількість слів, які користувач може використовувати для пошуку. Значення 0 відповідає необмеженій кількості слів.',
	'MIN_SEARCH_CHARS'						=> 'Мінімальна кількість символів для індексування',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Слова з такою або більшою кількістю символів будуть проіндексовані для пошуку.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Мінімальне число символів в іменах',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Користувачі повинні ввести не менше вказаної кількості символів при здійсненні пошуку за маскою. Якщо ім\'я автора коротше за це значення, ви можете здійснювати пошук повідомлень автора, ввівши ім\'я автора повністю.',

	'PROGRESS_BAR'							=> 'Індикатор виконання',

	'SEARCH_GUEST_INTERVAL'					=> 'Інтервал між запитами для гостей',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Час в секундах, через який гості зможуть здійснювати наступний пошук. Якщо один гість здійснює пошук, усі інші чекають, поки не пройде цей інтервал часу.',

	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Усі повідомлення до повідомлення під номером %1$d проіндексовано, з яких %2$d повідомлення проіндексовано на даному кроці.<br />',
		2	=> 'Усі повідомлення до повідомлення під номером %1$d проіндексовано, з яких %2$d повідомлення проіндексовано на даному кроці.<br />',
		3	=> 'Усі повідомлення до повідомлення під номером %1$d проіндексовано, з яких %2$d повідомлень проіндексовано на даному кроці.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Поточна швидкість індексування - приблизно %1$.1f повідомлення в секунду.<br />Індексування в процесі…',
		2	=> 'Поточна швидкість індексування - приблизно %1$.1f повідомлення в секунду.<br />Індексування в процесі…',
		3	=> 'Поточна швидкість індексування - приблизно %1$.1f повідомлень в секунду.<br />Індексування в процесі…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Усі повідомлення до повідомлення під номером %1$d видалено з пошукового індексу.<br />Видалення в процесі…',
		2	=> 'Усі повідомлення до повідомлення під номером %1$d видалено з пошукового індексу. З яких %1$d повідомлень було видалено на даному кроці.<br />',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1	=> 'Поточна швидкість видалення становить %1$.1f повідомлення в секунду.<br />Видалення в процесі…',
		2	=> 'Поточна швидкість видалення становить %1$.1f повідомлень в секунду.<br />Видалення в процесі…',
		3	=> 'Поточна швидкість видалення становить %1$.1f повідомлень в секунду.<br />Видалення в процесі…',
	),

	'SEARCH_INDEX_CREATED'					=> 'Успішно проіндексовано усі повідомлення в базі даних форуму.',
	'SEARCH_INDEX_REMOVED'					=> 'Успішно видалено пошуковий індекс для цього механізму.',
	'SEARCH_INTERVAL'						=> 'Інтервал між пошуковими запитами',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Час в секундах, через який користувачі зможуть здійснювати наступний пошук. Цей інтервал перевіряється окремо для кожного користувача.',
	'SEARCH_STORE_RESULTS'					=> 'Тривалість дії кешу результатів пошуку',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Закешовані результати пошуку будуть дійсні протягом цього часу (в секундах). Встановіть 0, якщо ви хочете вимкнути кешування пошуку.',
	'SEARCH_TYPE'							=> 'Пошуковий механізм',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB дозволяє вам обрати механізм, який буде використовуватись для пошуку тексту в повідомленнях. За замовчуванням пошук буде використовувати власний повнотекстовий пошук phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Ви змінили механізм пошуку. Для використання нового пошукового механізму переконайтесь, що індекс для обраного вами механізму створено.',

	'TOTAL_WORDS'							=> 'Загальна кількість проіндексованих слів',
	'TOTAL_MATCHES'							=> 'Загальна кількість проіндексованих слів, пов\'язаних з повідомленнями',

	'YES_SEARCH'							=> 'Увімкнути пошукові можливості',
	'YES_SEARCH_EXPLAIN'					=> 'Вмикає функції пошуку, включаючи пошук учасників.',
	'YES_SEARCH_UPDATE'						=> 'Увімкнути повнотекстове оновлення',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Оновлення повнотекстових індексів при розміщенні повідомлень, не працює при вимкненій функції пошуку.',
));
