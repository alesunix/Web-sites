<?php

# Меню в виде массивов. Добавляйте сколько угодно менюшек. Не забудьте вставить переменную в design.inc.php
# Добавлять следует в таком виде: адрес страницы, анкор ссылки (текстовая часть ссылки) и заголовок (всплывающая подсказка)
# И следите за запятой в конце элемента массива. Каждый элемент должен заканчиваться запятой, в отличие от последнего

$footmenu = array (
			array ('index', 'Главная', ''),
			array ('index.html#company""', 'О компании', ''),
			array ('uslugi', 'Услуги', ''),
			array ('tarifs', 'Тарифы', ''),
			#array ('feedback', 'Обратная связь', ''),
			array ('contact', 'Контакты', '')
);

$mainmenu = array (
			array ('index', 'Главная', ''),
			array ('index.html#company""', 'О компании', ''),
			array ('uslugi', 'Услуги', ''),
			array ('tarifs', 'Тарифы', ''),
			#array ('feedback', 'Обратная связь', ''),
			array ('contact', 'Контакты', '')
);

