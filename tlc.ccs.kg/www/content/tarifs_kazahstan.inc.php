<?php

# Данные о странице
$title = 'Тарифы TLC-Express';
$keywords = 'Тарифы';
$description = 'Тарифы по всем направлениям';
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

<p align="center"><b>Тарифы на прием  экспресс - отправлений из Бишкека в Республику Казахстан</b>
</p>
<small>
<table class="bordered">
<tr><th>№ п/п </th><th>Вес  </th><th>Алматы </th><th>Областные города* </th><th>Остальная территория </th></tr>
<tr><td>1 </td><td>До 300  гр. </td><td>470 </td><td>630 </td><td>1130 </td></tr>
<tr><td>2 </td><td>от 301 до 500  гр. </td><td>470 </td><td>750 </td><td>1370 </td></tr>
<tr><td>3 </td><td>от 501 до 1000гр. </td><td>530 </td><td>900 </td><td>1490 </td></tr>
<tr><td>4 </td><td>от1001 до 1500гр. </td><td>630 </td><td>990 </td><td>1640 </td></tr>
<tr><td>5 </td><td>1501 до 2000гр. </td><td>870 </td><td>1220 </td><td>1930 </td></tr>
<tr><td>6 </td><td>Свыше 2 кг за каждый последующий 1  кг </td><td>100 </td><td>190 </td><td>220 </td></tr>

</table>
</small>
<br><br>



EOF;
