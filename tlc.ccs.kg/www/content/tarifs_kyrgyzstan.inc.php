<?php

# Данные о странице
$title = 'Тарифы TLC-Express';
$keywords = 'Тарифы';
$description = 'Тарифы для физических лиц по Кыргызстану';
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

<p align="center"><b>Тарифы ТЛЦ на оказание услуг и сроки доставки (для населения)</b></p>
<small>
<table class="bordered">
<tr><th rowspan="2">№ п/п </th><th rowspan="2">Пункт назначения  </th><th colspan="2">Стоимость доставки (сом) </th><th rowspan="2">Срок доставки(дни) </th></tr>
<tr><th>До 0.5 кг и размеры не более 30х30х30см </th><th>За каждый последующий  1 кг  и размеры не более 30х30х30 см  </th></tr>
<tr><td>1 </td><td>Бишкек </td><td>90 </td><td>30 </td><td>1-2 </td></tr>
<tr><th colspan="5">Чуйская область </th></tr>
<tr><td>1 </td><td>г.Кант </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>2 </td><td>г.Кара-Балта </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>3 </td><td>Лебединовка </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>4 </td><td>Сокулук </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>5 </td><td>Беловодское </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>6 </td><td>Каинда </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>7 </td><td>Токмок </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>8 </td><td>Кемин </td><td>100 </td><td>50 </td><td>1-2 </td></tr>
<tr><th colspan="5">Джала-Абадская область </th></tr>
<tr><td>1 </td><td>с.Ала-Букинский с.Ала-Бука </td><td>150 </td><td>75 </td><td>2-4 </td></tr>
<tr><td>2 </td><td>Базар-Коргонский р-он с.Базар-Коргон </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>3 </td><td>с.Ала-Букинский с.Ала-Бука </td><td>150 </td><td>75 </td><td>2-4 </td></tr>
<tr><td>4 </td><td>Аксыйский р-н с.Кербен </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>5 </td><td>Ноокентский р-он с.Массы </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>6 </td><td>Токтогульский р-он с. Токтогул </td><td>150 </td><td>75 </td><td>2-4 </td></tr>
<tr><td>7 </td><td>Чаткальский р-он с.Каныш-Кия </td><td>200 </td><td>100 </td><td>3-5 </td></tr>
<tr><td>8 </td><td>г.Ташкумыр </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>9 </td><td>г.Майлуу-Суу </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>10 </td><td>г.Кара-Куль </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>11 </td><td>г.Джалал-Абад </td><td>150 </td><td>75 </td><td>1-2 </td></tr>
<tr><td>12 </td><td>Сузакский р-он с.Сузак </td><td>150 </td><td>75 </td><td>1-2 </td></tr>
<tr><td>13 </td><td>с.Казарман, Тогуз-Тороузского </td><td>250 </td><td>100 </td><td>3-5 </td></tr>
<tr><th colspan="5">Ошская область </th></tr>
<tr><td>1 </td><td>Алайский р-он с.Гульча </td><td>180 </td><td>90 </td><td>2-3 </td></tr>
<tr><td>2 </td><td>Араванский р-он с.Араван </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>3 </td><td>Кара-Суйский р-он г.Кара-Суу </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>4 </td><td>г.Ноокат </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>5 </td><td>Кара-Кульджинский р-он с.Кара-Кульджа </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>6 </td><td>Узгенский р-он г.Узген </td><td>150 </td><td>75 </td><td>2-3 </td></tr>
<tr><td>7 </td><td>Чон-Алайский р-он с.Дароот-Курган </td><td>200 </td><td>100 </td><td>3-5 </td></tr>
<tr><td>8 </td><td>г.Ош </td><td>150 </td><td>75 </td><td>1-2 </td></tr>
<tr><th colspan="5">Баткенская область </th></tr>
<tr><td>1 </td><td>Лейлекский р-он г.Исфана </td><td>280 </td><td>90 </td><td>3-5 </td></tr>
<tr><td>2 </td><td>Кадамжайский р-он с.Пульгон </td><td>250 </td><td>90 </td><td>2-4 </td></tr>
<tr><td>3 </td><td>г. Кызыл-Кия </td><td>250 </td><td>90 </td><td>2-4 </td></tr>
<tr><td>4 </td><td>г.Баткен </td><td>280 </td><td>90 </td><td>2-4 </td></tr>
<tr><td>5 </td><td>г.Сулюкта </td><td>280 </td><td>90 </td><td>3-5 </td></tr>
<tr><th colspan="5">Таласская область </th></tr>
<tr><td>1 </td><td>г.Талас </td><td>140 </td><td>70 </td><td>2-4 </td></tr>
<tr><td>2 </td><td>Кок-Ой </td><td>140 </td><td>70 </td><td>2-4 </td></tr>
<tr><td>3 </td><td>Бакай-Ата </td><td>170 </td><td>75 </td><td>2-4 </td></tr>
<tr><td>4 </td><td>с.Кызыл-Адыр Кара-Буринского р-на </td><td>170 </td><td>75 </td><td>2-4 </td></tr>
<tr><td>5 </td><td>Манаский р-с.Покровка </td><td>170 </td><td>75 </td><td>2-4 </td></tr>
<tr><th colspan="5">Иссык-кульская область </th></tr>
<tr><td>1 </td><td>Чолпон-Ата </td><td>140 </td><td>70 </td><td>2-3 </td></tr>
<tr><td>2 </td><td>Бокомбаево </td><td>140 </td><td>70 </td><td>2-3 </td></tr>
<tr><td>3 </td><td>г.Каракол </td><td>170 </td><td>85 </td><td>2-4 </td></tr>
<tr><td>4 </td><td>г.Балыкчи </td><td>140 </td><td>70 </td><td>2-3 </td></tr>
<tr><td>5 </td><td>Тюп </td><td>170 </td><td>85 </td><td>2-3 </td></tr>
<tr><td>6 </td><td>Ак-Суйский р-он с.Ак-Суу </td><td>170 </td><td>85 </td><td>2-3 </td></tr>
<tr><td>7 </td><td>с.Кызыл-Суу, Джеты-Огузского р-на </td><td>170 </td><td>85 </td><td>2-3 </td></tr>
<tr><th colspan="5">Нарынская область </th></tr>
<tr><td>1 </td><td>Кочкорский р-он с.Кочкорка </td><td>140 </td><td>70 </td><td>2-3 </td></tr>
<tr><td>2 </td><td>Жумгальский р-он с.Чаек </td><td>170 </td><td>85 </td><td>2-3 </td></tr>
<tr><td>3 </td><td>г.Нарын </td><td>170 </td><td>85 </td><td>2-3 </td></tr>
<tr><td>4 </td><td>Ат-Башинский р-он с.Ат-Баши </td><td>220 </td><td>85 </td><td>2-3 </td></tr>
<tr><td>5 </td><td>Ак-Талинский  р-он с.Баетово </td><td>220 </td><td>85 </td><td>2-3 </td></tr>
</table>
</small>
<br><br>
<b>Примечание: </b><br>

1.Сроки доставки  - не считая дня приема, праздничных и выходных дней;
<br>
2.Тарифы рассчитаны с учетом налогов;
<br>
3.Вес одного  Экспресс-отправления не  должен превышать 30 кг;
<br>
4.Максимальные размеры одного Экспресс – отправления 100 см по сумме всех трех  измерений,  свыше этого размера, до 270 см  Экспресс-отправления считаются  крупногабаритными. В случае, если  объемный вес превышает фактический вес, тариф берется по объемному весу. 
<br>
5.При приеме Экспресс - отправлений  с объявленной ценностью  берется  дополнительная  плата в размере 1% от объявленной ценности;
<br>
6.При приеме Экспресс отправлений с наложенным платежом  берется дополнительная плата в размере 2% от суммы наложенного платежа;
<br>
7.При вызове  курьера  берется   плата 90 сом, при приеме  курьером более 3-х писем  берется дополнительная плата  в размере 10 сом за каждое Экспресс  - отправление;
<br>
8.За  уведомление берется плата в размере 50 сом за каждое  Экспресс -отправление;
<br>
9. Предоставляется услуга  «Оплата  получателем», за что берется дополнительная плата к тарифу  в размере 90 сом  за  Экспресс-отправление.
<br>
11.При приеме Экспресс -  отправления  за пределы административных центров  (областных, районных центров и городов областного подчинения)  берется дополнительная плата  - 150 сом за каждое  отправление.
<br>
12.Предельная сумма  вложения до 50000 сом.
<br>
13.За хранение Экспресс-отправления по инициативе отправителя или получателя берется плата:   с объявленной ценностью - 50 сом в сутки, без объявленной ценности  - 20 сом в сутки.


EOF;
