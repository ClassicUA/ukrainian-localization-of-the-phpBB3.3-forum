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

$lang = array_merge($lang, [
	'HELP_BBCODE_BLOCK_IMAGES' => 'Показ зображень в повідомленнях',
	'HELP_BBCODE_BLOCK_INTRO' => 'Вступ',
	'HELP_BBCODE_BLOCK_LINKS' => 'Створення посилань',
	'HELP_BBCODE_BLOCK_LISTS' => 'Створення списків',
	'HELP_BBCODE_BLOCK_OTHERS' => 'Інше',
	'HELP_BBCODE_BLOCK_QUOTES' => 'Цитування та виведення тексту фіксованої ширини',
	'HELP_BBCODE_BLOCK_TEXT' => 'Форматування тексту',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER' => 'Тепер вкладення можуть бути поміщені в будь-якій частині повідомлення за допомогою нового тега BBCode <strong>[attachment=][/attachment]</strong>, якщо вкладення дозволені адміністратором конференції і якщо ви маєте необхідні права доступу. На сторінці розміщення повідомлення знаходиться список, що випадає (відповідна кнопка) для розміщення вкладень в повідомленні. ',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION' => 'Додати вкладення в повідомлення',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER' => 'BBCode включає тег для додавання картинки в ваше повідомлення. При цьому слід пам\'ятати дві дуже важливі речі: по-перше, багатьох користувачів дратує велика кількість зображень, по-друге, ваше зображення вже має бути розміщено в інтернеті (тобто воно не може бути розташоване тільки на вашому комп\'ютері, якщо, звичайно, ви не запустили на ньому веб-сервер!). На даний момент немає можливості зберігати зображення локально на phpBB (очікується, що це обмеження буде знято в наступній версії phpBB). Для виведення зображення ви повинні оточити його URL тегами <strong>[img][/img] </strong>. Наприклад: <br /><br /><strong>[img] </strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Як зазначено в попередньому пункті, ви можете оточити зображення тегами <strong>[url][/url]</strong>, тобто <br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />видасть:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION' => 'Додавання зображення в повідомлення',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER' => 'BBCode - це спеціальний варіант HTML. Чи зможете ви використовувати BBCode в ваших повідомленнях чи ні, визначається адміністратором форумів. Крім того, ви зможете відключити використання BBCode у конкретному повідомленні при його розміщенні. Сам BBCode по стилю схожий на HTML, теги вкладені в квадратні дужки [і], а не в &lt; і &gt;; він дає більше можливостей управління тим, як виводяться дані. При використанні деяких шаблонів ви зможете додавати BBCode в ваші повідомлення, користуючись простим інтерфейсом, розташованим над полем для введення тексту. Але навіть в цьому випадку дане керівництво може виявитися корисним.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION' => 'Що таке BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER' => 'У BBCode підтримується кілька способів створення URL\'ів.<ul><li>Перший з них використовує тег <strong>[url=][/url]</strong>, після знака = повинен йти потрібний URL. Наприклад, для посилання на phpBB.com ви могли б використовувати: <br /><br /><strong>[url=https://www.phpbb.com/]</strong>Відвідайте phpBB!<strong>[/url]</strong><br /><br />Це створить таке посилання: <a href="https://www.phpbb.com/">Відвідайте phpBB!</a>Врахуйте, що посилання буде відкриватися в тому ж або в новому вікні, в залежності від налаштувань браузера користувача.</li><li>Якщо ви хочете, щоб в якості тексту посилання показувався сам URL, ви можете просто зробити наступне: <br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Це видасть наступне посилання: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Крім того, phpBB підтримує можливість, що називається <i>Автоматичні посилання</i>, це переведе будь-який синтаксично правильний URL в посилання без необхідності вказівки тегів і навіть префікса http://. Наприклад, введення www.phpbb.com в ваше повідомлення призведе до автоматичної видачі <a href="https://www.phpbb.com/">www.phpbb.com</a> при перегляді повідомлення.</li><li>Те ж саме відноситься і до адрес email, ви можете або вказати адресу в явному вигляді: <br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br /> що видасть <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, або просто ввести no.one@domain.adr в ваше повідомлення, і він буде автоматично перетворено при перегляді.</li></ul>Як і з усіма іншими тегами BBCode, ви можете вкладати в URL\'и будь-які інші теги, наприклад <strong>[img][/img]</strong> (див. наступний пункт), <strong>[b][/b]</strong> і т. д. Як і з тегами форматування, правильна вкладеність тегів залежить від вас, наприклад: <br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">невірно</span>, що може привести до подальшого видалення вашого повідомлення, так що будьте акуратніше.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION' => 'Посилання на інший сайт',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER' => 'Другий тип списку, нумерований, дозволяє вибрати, що саме буде виводитися перед кожним елементом. Для створення нумерованого списку використовуйте <strong>[list=1][/list]</strong> або <strong>[list=a][/list]</strong>для алфавітного списку. Як і в разі маркованого списку, елементи визначаються за допомогою <strong>[*]</strong>. Наприклад: <br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Піти в магазин<br /><strong>[*]</strong>Купити новий комп\'ютер<br /><strong>[*]</strong>Облаяти комп\'ютер, коли трапиться помилка<br /><strong>[/list]</strong><br /><br />видасть наступне: <ol style="list-style-type: decimal;"><li>Піти в магазин</li><li>Купити новий комп\'ютер</li><li>Облаяти комп\'ютер, коли трапиться помилка</li></ol>Для алфавітного списку використовуйте:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Перша можлива відповідь<br /><strong>[*]</strong>Друга можлива відповідь<br /><strong>[*]</strong>Третя можлива відповідь<br /><strong>[/list]</strong><br /><br />що видасть <ol style="list-style-type: lower-alpha"><li>Перша можлива відповідь</li><li>Друга можлива відповідь</li><li>Третя можлива відповідь</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION' => 'Створення нумерованого списку',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER' => 'BBCode підтримує два види списків: марковані й нумеровані. Вони практично ідентичні своїм еквівалентам з HTML. У маркованих списках всі елементи виводяться послідовно, кожен відзначається символом-маркером. Для створення маркованого списку використовуйте <strong>[list][/list]</strong> та визначте кожен елемент за допомогою <strong>[*]</strong>. Наприклад, щоб вивести свої улюблені кольори, ви можете використовувати: <br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Червоний<br /><strong>[*]</strong>Синій<br /><strong>[*]</strong>Жовтий<br /><strong>[/list]</strong><br /><br />Це видасть такий список: <ul><li>Червоний</li><li>Синій</li><li>Жовтий</li></ul><br />Також можна вказати стиль маркера списку, використовуючи <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, or <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION' => 'Створення маркованого списку',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER' => 'Якщо ви є адміністратором цієї конференції і маєтe достатні права, то можете додати нові теги BBCode в адміністраторському розділі.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION' => 'Чи можу я додати власні теги?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER' => 'Якщо потрібно вивести частину програмного коду або інші дані фіксованої ширини, такі, як шрифт Courier, необхідно оточувати текст тегами <strong>[code][/code]</strong>, наприклад <br /><br /><strong>[code]</strong> echo & quot;Тут знаходиться код&quot;;<strong>[/code]</strong><br /><br />Все форматування, що використовується всередині тегів <strong>[code][/code]</strong>, буде збережено.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION' => 'Виведення коду або даних фіксованої ширини',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER' => 'Існує два способи цитування тексту: зі зверненням і без.<ul><li>При використанні кнопки цитування для відповіді на повідомлення, у вікно відповіді додається текст цитованого повідомлення, обрамлений тегами <strong>[quote=&quot;&quot;][/quote]</strong>. Цей спосіб дозволяє цитувати зі зверненням до користувача або до когось (чогось) ще, на вибір. Наприклад, щоб процитувати текст, написаний користувачем Mr. Blobby, можна ввести: <br /><br /><strong>[quote=&quot; Mr. Blobby&quot;]</strong>Тут знаходиться текст, написаний користувачем Mr. Blobby<strong>[/quote]</strong><br /><br /> У результаті перед текстом будуть вставлені слова "Mr. Blobby писав (а):". Пам\'ятайте, що <strong>обов\'язково</strong> вкладати звернення в лапки &quot;&quot;, вони не можуть бути пропущені.</li><li>Другий спосіб дозволяє створювати прості цитати. Для цього необхідно вкласти текст в теги <strong>[quote][/quote]</strong>. При перегляді повідомлення буде просто показаний текст в блоці цитування.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION' => 'Цитування при відповідях',

	'HELP_BBCODE_TEXT_BASIC_ANSWER' => 'BBCode включає теги для швидкої зміни стилю шрифту. Це досягається наступними способами: <ul><li>Щоб зробити текст жирним, вкладіть його в <strong>[b][/b]</strong>, наприклад:<br /><br /><strong>[b]</strong>Привіт<strong>[/b]</strong><br /><br /> стане <strong>Привіт</strong></li><li>Для підкреслення використовуйте <strong>[u][/u]</strong>, наприклад: <br /><br /><strong>[u]</strong>Доброго ранку<strong>[/u]</strong><br /><br />стане <span style="text-decoration: underline">Добрий ранок</span></li><li>Щоб зробити текст курсивним, використовуйте тег <strong>[i][/i]</strong>, наприклад:<br /><br />Це <strong>[i]</strong>здорово!<strong>[/i]</strong><br /> <br />виведе Це <i>здорово!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION' => 'Як зробити текст жирним, курсивним чи підкресленим',
	'HELP_BBCODE_TEXT_COLOR_ANSWER' => 'Для зміни кольору або розміру шрифту можуть бути використані наступні теги (остаточний вигляд буде залежати від системи і браузера користувача): <ul><li>Колір тексту можна змінити, оточивши його <strong>[color=][/color]</strong>. Можна вказати або відоме ім\'я кольору (red, blue, yellow і т. п.), або його шістнадцяткове подання, наприклад #FFFFFF, #000000. Таким чином, для створення червоного тексту можна використати: <br /><br /><strong>[color=red]</strong>Привіт!<strong>[/color]</strong><br /><br />або<br /><br /><strong>[color=#FF0000]</strong>Привіт!<strong>[/color]</strong><br /><br />в обох випадках буде виведено <span style="color:red">Привіт!</span></li><li>Зміна розміру досягається аналогічним чином при використанні тега <strong>[size=][/size]</strong>. Цей тег залежить від використовуваних шаблонів, рекомендований формат - число, що показує розмір тексту у відсотках, від 20% (дуже маленький) до 200% (дуже великий) залежного від розміру за замовчуванням. Наприклад:<br /><br /><strong>[size=30]</strong>МАЛЕНЬКИЙ<strong>[/size]</strong><br /><br />швидше за все буде виведено як <span style="font-size:30%;">МАЛЕНЬКИЙ</span><br /><br />в той час, як:<br /><br /><strong>[size=200]</strong>ВЕЛИЧЕЗНИЙ!<strong>[/size]</strong><br /><br />буде виведено як <span style="font-size:200%;">ВЕЛИЧЕЗНИЙ!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION' => 'Як змінити колір або розмір тексту',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER' => 'Так, це можливо. Наприклад, щоб привернути увагу, можна написати:<br /><br /><strong>[size=200][color=red][b]</strong>ПОДИВІТЬСЯ НА МЕНЕ!<strong>[/b][/color][/size]</strong><br /><br />в цьому випадку буде виведено <span style="color:red;font-size:200%;"><strong>ПОДИВІТЬСЯ НА МЕНЕ!</strong></span><br /><br />Не рекомендується виводити таким чином довгі тексти! Врахуйте, що автор повідомлення повинен подбати про правильне закриття тегів. Наприклад, наступне використання тегів BBCode невірне: <br /><br /><strong>[b][u]</strong>Це невірно<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION' => 'Чи можу я комбінувати теги?',
]);
