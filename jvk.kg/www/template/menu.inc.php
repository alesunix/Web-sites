<?php

# Меню в виде массивов. Добавляйте сколько угодно менюшек. Не забудьте вставить переменную в design.inc.php
# Добавлять следует в таком виде: адрес страницы, анкор ссылки (текстовая часть ссылки) и заголовок (всплывающая подсказка)
# И следите за запятой в конце элемента массива. Каждый элемент должен заканчиваться запятой, в отличие от последнего

$footmenu = array (		
			//array ('company', 'О компании', ''),
			//array ('forpeople', 'Населению', ''),
			//array ('forabonents', 'Абонентам', ''),
			//array ('press', 'Пресс-служба', ''),
			//array ('projects', 'Проекты', ''),
);

$mainmenu = array (	
array ('company', '
	<ul class="topmenu">
		<li><a href="#" class="submenu-link">О компании</a>
          <ul class="submenu">
            <li><a href="/company/direction.html">Руководство</a></li>
			<li><a href="/company/structure.html">Структура</a></li>
			<li><a href="/company/regulations.html">Нормативные документы</a></li>
			<li><a href="/company/activities.html">Приоритетные направления деятельности</a></li>
			<li><a href="/company/history.html">История</a></li>
			<li><a href="/company/job.html">Работа в Жалал-Абад водоканале</a></li>
			<li><a href="/company/anticorruption.html">Противодействие коррупции</a></li>
			<li><a href="/company/contacts.html">Контакты</a></li>
          </ul>
        </li>
      </ul>
', ''),
array ('forpeople', '
	<ul class="topmenu">
		<li><a href="#" class="submenu-link">Населению</a>
          <ul class="submenu">
            <li><a href="/forpeople/waterquality.html">Качество воды</a></li>
            <li><a href="/forpeople/tariffs.html">Тарифы</a></li>
			<li><a href="/forpeople/waterhardnesscalculator.html">Калькулятор жесткости воды</a></li>
			<li><a href="/forpeople/disinfection.html">Дезинфекция – залог безопасности питьевой воды</a></li>
			<li><a href="/forpeople/forpeoplefaq.html">Ответы на вопросы</a></li>
          </ul>
        </li>
      </ul>
', ''),
array ('forabonents', '
	<ul class="topmenu">
		<li><a href="#" class="submenu-link">Абонентам</a>
          <ul class="submenu">
            <li><a href="/forabonents/news.html">Новости</a></li>
            <li><a href="/forabonents/conclusionofcontracts.html">Заключение договоров холодного водоснабжения и водоотведения</a></li>
			<li><a href="/forabonents/waterconnection.html">Подключение к водоснабжению и водоотведению</a></li>
			<li><a href="/forabonents/declarationofcomposition.html">Декларация о составе сточных вод</a></li>
			<li><a href="/forabonents/tarifs.html">Тарифы на услуги водоснабжения и водоотведения</a></li>
			<li><a href="/forabonents/additionalservices.html">Дополнительные услуги</a></li>
			<li><a href="/forabonents/downloads.html">Документы для скачивания</a></li>
			<li><a href="/forabonents/forabonentsfaq.html">Ответы на вопросы</a></li>
          </ul>
        </li>
      </ul>
', ''),

array ('press', '
	<ul class="topmenu">
		<li><a href="#" class="submenu-link">Пресс-служба</a>
          <ul class="submenu">
            <li><a href="/press/companynews.html">Новости компании</a></li>
            <li><a href="/press/massmedia.html">СМИ о нас</a></li>
			<li><a href="/press/photoreports.html">Фотоотчеты</a></li>
			<li><a href="/press/videoreports.html">Видеоотчеты</a></li>
			<li><a href="/press/mediacontacts.html">Контакты для СМИ</a></li>
          </ul>
        </li>
      </ul>
', ''),	
array ('projects', '
	<ul class="topmenu">
		<li><a href="#" class="submenu-link">Проект ЕБРР</a>
          <ul class="submenu">
            <li><a href="/projects/phase1.html">Фаза1</a></li>
            <li><a href="/projects/phase2.html">Фаза2</a></li>
          </ul>
        </li>
      </ul>
', ''),
);

