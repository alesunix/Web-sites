<?php
{
# Данные о странице
$title = 'Контактная информация компании БСК ';
$keywords = 'Контакты, БСК';
$description = 'Контактная информация компании БСК';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<center>
<img src="/i/contact.png" width=300 alt=""> <br>


<table class="bordered">
<caption><b><big>  г.Бишкек Ул. Фучика, 47/2    </b></big></caption>
<tr><th>+996 (555) 71-11-77</th><th>+996 (505) 71-11-77</th></tr>
<td>ПИШИТЕ</td>
<td> info@bsk-pro.kg </td></tr>
<td> ЗВОНИТЕ </td>
<td> +996 (755) 95-69-69 </td></tr>
<td> <a href="https://api.whatsapp.com/send?phone=996755956969"><img src="i/whatsapp.png" width="100" height="100" alt="WhatsApp"></a> </td>
<td><a href="https://www.instagram.com/bishkekwelding/" target="_blank"><img src="i/instagram.png" width="100" height="100" alt="instagram"></a>  </td></tr>
</table>
</center>
<br>


<style>
   P { 
    text-indent: 1.5em; /* Отступ первой строки */
    text-align: justify; /* Выравнивание по ширине */
   }
  </style>
  <style>
.shadow  { 
-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,1);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,1);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,1);
}
</style>

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
EOF;
}