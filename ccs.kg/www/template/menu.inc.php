<?php

# Меню в виде массивов. Добавляйте сколько угодно менюшек. Не забудьте вставить переменную в design.inc.php
# Добавлять следует в таком виде: адрес страницы, анкор ссылки (текстовая часть ссылки) и заголовок (всплывающая подсказка)
# И следите за запятой в конце элемента массива. Каждый элемент должен заканчиваться запятой, в отличие от последнего

$footmenu = array (
			array ('index.html#company"', 'О предприятии', ''),
			array ('direction', 'Руководство', ''),
			array ('services', 'Услуги', ''),
			array ('interactive-map', 'Зона обслуживания', ''),
			array ('partner', 'Наши партнеры', ''),
			array ('feedback', 'Обратная связь', ''),
			array ('contact', 'Контакты', '')
);

$mainmenu = array (
			array ('"#', '
	<ul class="topmenu">
		<li><a href="#" class="submenu-link">О предприятии</a>
          <ul class="submenu">
		    <li><a href="/index.html#company">Информация</a></li>
		    <li><a href="/history.html">История предприятия</a></li>
			<li><a href="/history.html#veterans">Ветераны спецсвязи</a></li>   
			<li><a href="/quality.html">Политика качества</a></li>
			<li><a href="/anti-corruption.html">Противодействие коррупции</a></li>
			<li><a href="/symbolics.html">Символика</a></li>
			<li><a href="/direction.html">Руководство</a></li>
          </ul>
        </li>
      </ul>
', ''),
			array ('services', 'Услуги', ''),
			array ('interactive-map', 'Зона обслуживания', ''),
			array ('partner', 'Наши партнеры', ''),
			array ('feedback', 'Обратная связь', ''),
			array ('contact', 'Контакты', '')
);

