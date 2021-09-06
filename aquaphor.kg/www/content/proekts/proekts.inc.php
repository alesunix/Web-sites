<?php

# Данные о странице
$title = 'Реализованные проекты';
$keywords = 'проекты';
$description = 'Реализованные проекты';
$template = 'info';
$page_blocks = 'newsblock';

# Содержание страницы
$content = <<<EOF
<style>
   .index {

    float: center; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 3px solid #fff; /* Параметры рамки */
	border-radius: 3px; /* Радиус скругления */
    padding: 1px; /* Поля внутри блока */
    margin: 1px 1px 1px; /* Отступы вокруг */
    background: rgb(243, 251, 255); /* Цвет фона */ 
	 box-shadow:
   0 1px 4px rgba(0, 0, 0, .3),
   -23px 0 20px -23px rgba(0, 0, 0, .8),
   23px 0 20px -23px rgba(0, 0, 0, .8),
   0 0 40px rgba(0, 0, 0, .1) inset; /* Параметры тени */
   }
   .sign figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
 
<center>
<figure class="index"><img src="/i/BanerRealiz.png" alt=""></a></figure>
</center>
EOF;
