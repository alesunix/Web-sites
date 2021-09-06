<?php

# Данные о странице
$title = 'Тарифы TLC-Express';
$keywords = 'Тарифы';
$description = 'Тарифы для юридических лиц по Кыргызстану';
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

<p align="center"><b>Тарифы на услуги и контрольные сроки для учреждений, организаций в адрес учреждений и организаций <br>по Кыргызстану и странам СНГ </b></p>
<small>
<table class="bordered">
<tr><th rowspan="1">№ п/п </th><th rowspan="1">Наименование  </th><th rowspan="1">Экспресс-отправление до 0,5 кг ( сом) </th><th rowspan="1">За каждые последующие 0,5 кг  </th><th rowspan="1">Сроки доставки (сутки) </th></tr>
<tr><td>1 </td><td>г. Бишкек </td><td>125 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>2 </td><td>Чуйская область </td><td>175 </td><td>50 </td><td>1-3 </td></tr>
<tr><td>3 </td><td>г. Ош </td><td>286 </td><td>70 </td><td>2-3 </td></tr>
<tr><td>4 </td><td>Ошская область  </td><td>300 </td><td>70 </td><td>2-5 </td></tr>
<tr><td>5 </td><td>г. Жалал-Абад </td><td>286 </td><td>80 </td><td>2-3 </td></tr>
<tr><td>6 </td><td>Жалал-Абадская область </td><td>300 </td><td>80 </td><td>2-5 </td></tr>
<tr><td>7 </td><td>г. Баткен </td><td>364 </td><td>80 </td><td>3-6 </td></tr>
<tr><td>8 </td><td>Баткенская область </td><td>390 </td><td>80 </td><td>3-6 </td></tr>
<tr><td>9 </td><td>г. Нарын, г. Талас, г. Каракол </td><td>280 </td><td>70 </td><td>2-3 </td></tr>
<tr><td>1 </td><td>Нарынская, Иссык-Кульская, Таласская  области </td><td>228 </td><td>70 </td><td>2-4 </td></tr>
<tr><td>1 </td><td>г.Балыкчы </td><td>188 </td><td>65 </td><td>2-3 </td></tr>
<tr><td>1 </td><td>с.Казарман </td><td>364 </td><td>80 </td><td>5-6 </td></tr>
<tr><td>1 </td><td>с.Дароот-Коргон </td><td>264 </td><td>80 </td><td>7-8 </td></tr>
<tr><td>1 </td><td>с.Каныш-Кия </td><td>364 </td><td>80 </td><td>7-8 </td></tr>
<tr><td>1 </td><td>Аэропорт «Манас» </td><td>520 </td><td>50 </td><td>1-2 </td></tr>
<tr><td>1 </td><td>г. Москва </td><td>560 </td><td>280 </td><td rowspan="11">4-11 дней , не считая дня приема, праздничных и выходных дней </td></tr>
<tr><td>1 </td><td>Российская Федерация </td><td>125 </td><td>50 </td></tr>
<tr><td>1 </td><td>Украина, Белоруссия, Молдова </td><td>845 </td><td>423 </td></tr>
<tr><td>1 </td><td>г. Алматы </td><td>520 </td><td>260 </td></tr>
<tr><td>1 </td><td>Казахстан </td><td>585 </td><td>293 </td></tr>
<tr><td>1 </td><td>Узбекистан </td><td>611 </td><td>305 </td></tr>
<tr><td>1 </td><td>Туркмения </td><td>650 </td><td>325 </td></tr>
<tr><td>1 </td><td>Таджикистан </td><td>650 </td><td>325 </td></tr>
<tr><td>1 </td><td>Армения,  Азербайджан </td><td>845 </td><td>423 </td></tr>
<tr><td>1 </td><td>Мурманск, Якутия, Архангельск </td><td>910 </td><td>455 </td></tr>
<tr><td>1 </td><td>Чукотка, Магадан, Камчатка, Сахалин </td><td>1040 </td><td>520 </td></tr>
</table>
</small>
<br><br>
<b>Примечание: </b><br>

Сроки доставки  - не считая дня приема, праздничных и выходных дней;
<br>
2.Тарифы рассчитаны с учетом налогов;
<br>
3.Вес одного  Экспресс-отправления не  должен превышать 30 кг;
<br>
4. В случае, если  объемный вес превышает фактический вес, тариф берется по объемному весу. Для расчета объемного веса необходимо найти объем посылки, который  определяется путем перемножения  длины экспресс - отправления  на ширину и на высоту в см,  полученный  результат   разделить на коэффициент 5000;
<br>
5.Максимальные размеры одного Экспресс – отправления 100 см или 270 см  по сумме всех измерений;
<br>
6.При приеме Экспресс - отправлений  с объявленной ценностью  берется  дополнительная  плата в размере 1% от объявленной ценности;
<br>
7.При приеме Экспресс отправлений с наложенным платежом  берется дополнительная плата. 8.При вызове  курьера  берется   плата 90 сом, при приеме  курьером более 3-х писем  берется дополнительная плата  в размере 10 сом за каждое Экспресс  - отправление;
<br>
9.За  уведомление берется плата в размере 50 сом за каждое  Экспресс - отправление;
<br>
10. Предоставляется услуга  «Оплата  получателем», за что берется дополнительная плата к тарифу  в размере 90 сом  за  Экспресс-отправление.
<br>
11.При приеме Экспресс -  отправления  за пределы административных центров  (областных, районных центров и городов областного подчинения)  берется дополнительная плата  - 150 сом за каждое  отправление.



EOF;
