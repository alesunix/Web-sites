<?php

# Данные о странице
$title = 'Тарифы TLC-Express';
$keywords = 'Тарифы';
$description = 'Тарифы из Бишкека по Российской Федерации';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<!--Стиль ТАБЛИЦЫ с подсветкой-->
<style>
.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;     
    width: 100%; /* Ширина таблицы */    
}
 
.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
 
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 1px;
    text-align: center;    
}
 
.bordered th {
    padding-top:21px;
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}
 
.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}
 
.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}
 
.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}
 
.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}
 
.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}
 
.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}
</style>

<a href="/tarifs_bishkek_russia.html">Тарифы из Бишкека по территории Российской Федерации</a><br>
<a href="/tarifs_osh_russia.html">Тарифы из Оша по территории Российской Федерации</a><br>
<a href="/tarifs_kazahstan.html">Тарифы из Бишкека в Республику Казахстан</a><br>
<a href="/tarifs_kyrgyzstan.html">Тарифы по Кыргызской Республике (для физических лиц)</a><br>
<a href="/uri_tarifs_kyrgyzstan.html">Тарифы по Кыргызской Республике (для юридических лиц)</a><br><br>


<p align="center"><b>Тарифные зоны и cроки прохождения экспресс- отправлений из Бишкека по территории Российской Федерации </b></p>

<small>
<table class="bordered">
<tr><th></th><th></th><th></th><th colspan="2">Срок прохождения (сутки от и до)</th></tr>
<tr><th>Обслуживаемая  территория</th> <th>Индекс</th> <th>Зона</th> <th>Административный центр</th> <th>Регион</th></tr>
<tr><td>Абакан и Республика Хакасия</td><td>655000</td><td>5</td><td>7-9</td><td>8-12</td></tr>
<tr><td>Анадырь** и Чукотский А.О. </td><td>689000 </td><td>6 </td><td>8-12 </td><td>11-15 </td></tr>
<tr><td>Архангельск и область </td><td>163000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Астрахань и область  </td><td>414000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Барнаул и Алтайский край </td><td>656000 </td><td>4 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Белгород и область </td><td>308000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Биробиджан и Еврейская А.О. </td><td>679000 </td><td>6 </td><td>8-10 </td><td>9-13 </td></tr>
<tr><td>Благовещенск и Амурская обл. </td><td>675000 </td><td>5 </td><td>7-9 </td><td>8-12 </td></tr>
<tr><td>Брянск и область </td><td>241000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Великий Новгород и область </td><td>173000 </td><td>1 </td><td>7-8 </td><td>8-10 </td></tr>
<tr><td>Владивосток и Приморский край </td><td>690000 </td><td>4 </td><td>7-8 </td><td>8-11 </td></tr>
<tr><td>Владикавказ и  РСО – Алания </td><td>362000 </td><td>3 </td><td>5-7 </td><td>6-10 </td></tr>
<tr><td>Владимир и область </td><td>600000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Волгоград и область </td><td>400000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Вологда и область </td><td>160000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Воронеж и область </td><td>394000 </td><td>2 </td><td>5-7 </td><td>7-10 </td></tr>
<tr><td>Горно-Алтайск  ** и Республика Алтай </td><td>649000 </td><td>4 </td><td>8-9 </td><td>9-12 </td></tr>
<tr><td>Грозный и Чеченская Республика </td><td>364000 </td><td>4 </td><td>7-9 </td><td>8-12 </td></tr>
<tr><td>Екатеринбург и Свердловская обл. </td><td>620000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Иваново и область </td><td>153000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Ижевск и Удмуртская Республика </td><td>426000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Иркутск и область </td><td>664000 </td><td>4 </td><td>6-7 </td><td>7-12 </td></tr>
<tr><td>Йошкар-Ола и Республика Марий-Эл </td><td>424000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Казань и Республика Татарстан </td><td>420000 </td><td>2 </td><td>5-6 </td><td>6-9 </td></tr>
<tr><td>Калининград и область </td><td>236000 </td><td>2 </td><td>5-7 </td><td>6-10 </td></tr>
<tr><td>Калуга и область </td><td>248000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Кемерово и область </td><td>650000 </td><td>4 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Киров и область </td><td>610000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Кострома и область </td><td>156000 </td><td>1 </td><td>5-6 </td><td>6-9 </td></tr>
<tr><td>Краснодар и край </td><td>350000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Красноярск и край </td><td>660000 </td><td>4 </td><td>6-7 </td><td>7-13 </td></tr>
<tr><td>Курган и область </td><td>640000 </td><td>3 </td><td>7-8 </td><td>8-11 </td></tr>
<tr><td>Курск и область </td><td>305000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Кызыл и Республика Тыва </td><td>667000 </td><td>6 </td><td>8-10 </td><td>9-13 </td></tr>
<tr><td>Липецк и область </td><td>398000 </td><td>2 </td><td>7-8 </td><td>8-11 </td></tr>
<tr><td>Магадан и область  </td><td>685000 </td><td>5 </td><td>7-8 </td><td>9-19 </td></tr>
<tr><td>Магас и Республика Ингушетия </td><td>366720 </td><td>4 </td><td>8-9 </td><td>9-11 </td></tr>
<tr><td>Майкоп ** и Республика Адыгея  </td><td>385000 </td><td>3 </td><td>7-9 </td><td>8-12 </td></tr>
<tr><td>Махачкала и Республика Дагестан </td><td>367000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Москва </td><td>101000 </td><td>* </td><td>4-5 </td><td>- </td></tr>
<tr><td>Московская область  </td><td>141000 </td><td>* </td><td>- </td><td>6-8 </td></tr>
<tr><td>Мурманск и область </td><td>183000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Нальчик и Кабардино-Балкарская Республика </td><td>360000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Нарьян-Мар и Ненецкий А.О. </td><td>166000 </td><td>6 </td><td>7-8 </td><td>8-11 </td></tr>
<tr><td>Нижний Новгород и область </td><td>603000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Новосибирск и область </td><td>630000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Омск и область </td><td>644000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Орел и область </td><td>302000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Оренбург  и область </td><td>460000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Пенза и область </td><td>440000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Пермь и  край </td><td>614000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Петрозаводск и Республика Карелия </td><td>185000 </td><td>3 </td><td>6-8 </td><td>7-11 </td></tr>
<tr><td>Петропавловск-Камчатский и Камчатский край </td><td>683000 </td><td>5 </td><td>7-8 </td><td>8-13 </td></tr>
<tr><td>Псков и область </td><td>180000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Ростов-на-Дону и область </td><td>344000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Рязань и область </td><td>390000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Салехард** и Ямало-Ненецкий А.О. </td><td>629000 </td><td>6 </td><td>6-8 </td><td>7-11 </td></tr>
<tr><td>Самара и область </td><td>443000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Санкт-Петербург </td><td>190000 </td><td>* </td><td>5-6 </td><td>- </td></tr>
<tr><td>Ленинградская область </td><td>191000 </td><td>1 </td><td>- </td><td>6-9 </td></tr>
<tr><td>Саранск и Республика Мордовия </td><td>430000 </td><td>3 </td><td>6-8 </td><td>7-11 </td></tr>
<tr><td>Саратов и область </td><td>410000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Севастополь** </td><td>299000 </td><td>3 </td><td>7-10 </td><td>- </td></tr>
<tr><td>Симферополь и Республика Крым </td><td>295000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Смоленск и область </td><td>214000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Ставрополь и край </td><td>355000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Сыктывкар и Республика Коми </td><td>167000 </td><td>3 </td><td>6-7 </td><td>8-12 </td></tr>
<tr><td>Тамбов и область </td><td>392000 </td><td>2 </td><td>7-8 </td><td>8-11 </td></tr>
<tr><td>Тверь и область </td><td>170000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Томск и область </td><td>634000 </td><td>4 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Тула и область </td><td>300000 </td><td>1 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Тюмень и область </td><td>625000 </td><td>4 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Улан-Удэ и Республика Бурятия </td><td>670000 </td><td>5 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Ульяновск и область </td><td>432000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Уфа и Республика Башкортостан  </td><td>450000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Хабаровск и край </td><td>680000 </td><td>4 </td><td>7-8 </td><td>8-11 </td></tr>
<tr><td>Ханты-Мансийск и А.О. </td><td>628000 </td><td>4 </td><td>6-7 </td><td>7-11 </td></tr>
<tr><td>Чебоксары и Чувашская Республика </td><td>428000 </td><td>2 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Челябинск и область </td><td>454000 </td><td>3 </td><td>6-7 </td><td>7-10 </td></tr>
<tr><td>Черкесск и Карачаево-Черкесская Республика </td><td>369000 </td><td>3 </td><td>7-9 </td><td>8-12 </td></tr>
<tr><td>Чита и Забайкальский край </td><td>672000 </td><td>5 </td><td>7-8 </td><td>8-15 </td></tr>
<tr><td>Элиста и Республика Калмыкия </td><td>358000 </td><td>3 </td><td>6-8 </td><td>7-11 </td></tr>
<tr><td>Южно-Сахалинск и Сахалинская область </td><td>693000 </td><td>5 </td><td>7-10 </td><td>8-12 </td></tr>
<tr><td>Якутск и Республика Саха (Якутия) </td><td>677000 </td><td>5 </td><td>7-10 </td><td>8-13 </td></tr>
<tr><td>Ярославль и область </td><td>150000 </td><td>1 </td><td>5-6 </td><td>6-9 </td></tr>
</table>

<br>
Примечания:  <br>
* 1.  Доставка экспресс - отправлений в Москву, Московскую область и  Санкт-Петербург  осуществляется по выделенным тарифам.<br>
**2. Расчет тарифа для административного центра этого субъекта РФ осуществляется по графе "Регион" данной тарифной зоны.<br>
  3. Сроки прохождения указаны без учета дня приёма, а также выходных и праздничных дней.<br>
</small>
<br><br>

<p align="center"><b>Тарифы на прием экспресс-отправлений из Бишкека в Российскую Федерацию</b><br>
(в рублях в том числе НДС )
</p>

<small>
<table class="bordered">
<tr><th rowspan="2">вес,кг </th><th rowspan="2">в Москву</th><th colspan="3">в Московскую область</th><th rowspan="2">в Санкт-Петербург</th><th colspan="2">Зона 1 </th><th colspan="2">Зона 2 </th><th colspan="2">Зона 3 </th><th colspan="2">Зона 4 </th><th colspan="2">Зона 5 </th><th colspan="2">Зона 6 </th></tr>
<tr><th>зона мо1</th><th>зона мо2</th><th>зона мо3</th><th>Ад.центр</th><th>Ост.терр</th><th>Ад.центр</th><th>Ост.терр</th><th>Ад.центр</th><th>Ост.терр</th><th>Ад.центр</th><th>Ост.терр</th><th>Ад.центр</th><th>Ост.терр</th><th>Ад.центр</th><th>Ост.терр</th></tr>

<tr><td>0.1</td><td>	898</td><td>	1140</td><td>	1276</td><td>	1391</td><td>	1023</td><td>	1192</td><td>	1345</td><td>	1289</td><td>	1486</td><td>	1321</td><td>	1553</td><td>	1342</td><td>	1628</td><td>	1413</td><td>	1778</td><td>	1565</td><td>	1889</td></tr>
<tr><td>0.5</td><td>	922</td><td>	1175</td><td>	1308</td><td>	1423</td><td>	1060</td><td>	1236</td><td>	1392</td><td>	1333</td><td>	1524</td><td>	1366</td><td>	1612</td><td>	1412</td><td>	1702</td><td>	1494</td><td>	1858</td><td>	1642</td><td>	1996</td></tr>
<tr><td>1</td><td>	1209</td><td>	1475</td><td>	1615</td><td>	1725</td><td>	1357</td><td>	1561</td><td>	1712</td><td>	1670</td><td>	1860</td><td>	1708</td><td>	1973</td><td>	1792</td><td>	2091</td><td>	1890</td><td>	2256</td><td>	2027</td><td>	2415</td></tr>
<tr><td>1.5</td><td>	1494</td><td>	1777</td><td>	1917</td><td>	2037</td><td>	1668</td><td>	1898</td><td>	2050</td><td>	2002</td><td>	2205</td><td>	2059</td><td>	2334</td><td>	2183</td><td>	2500</td><td>	2052</td><td>	2635</td><td>	2417</td><td>	2846</td></tr>
<tr><td>2</td><td>	1518</td><td>	1796</td><td>	1941</td><td>	2064</td><td>	1704</td><td>	1971</td><td>	2121</td><td>	2187</td><td>	2283</td><td>	2150</td><td>	2439</td><td>	2297</td><td>	2649</td><td>	2478</td><td>	2799</td><td>	2528</td><td>	3016</td></tr>

</table>
</small>
<br><br>
EOF;
