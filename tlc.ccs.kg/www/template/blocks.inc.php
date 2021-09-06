<?php
# Дополнительные блоки данных
# Добавляйте сколько угодно. Не забудьте вставить переменную в design.inc.php или на страницу в папке content/

$newsblock = <<<newsblock
<div class='well well-small'>
 <hr>
<strong>КАЧЕСТВЕННО И ТОЧНО В СРОК</strong><br>
Вы можете воспользоваться нашими дополнительными услугами:<br>
• вызов курьера;<br>
• закрепление курьера на постоянной основе за юридическими лицами;<br>
• предоставление уведомления о доставке отправления с отметкой получателя о получении;<br>
• предоставление уведомления о вручении через SMS-сообщение.
<hr>
	• <b><font color="#FF0000">Введите №_ отправления</font></b>
	<form action="/get.php" method="GET">
      <input type="text" name="N_zakaza" />
      <input type="submit" name="search" value="Поиск" />
    </form>   

</div><!--/well -->
newsblock;

$donate = <<<donate

donate;

$reklam = <<<reklam
<div class='well well-small'>
<style>
   .sign00 {
    width: 30%;
    float: center; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 0px solid #FFFFFF; /* Параметры рамки */
	border-radius: 15px; /* Радиус скругления */
    padding: 3px;   /* Поля внутри блока */
    margin: 1px 3px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	-webkit-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);/* Параметры тени */

    filter: alpha (Opacity=25);
    opacity: 1;
    -moz-transition: all 1s ease-in-out; /* эффект перехода для Firefox до версии 16.0 */
    -webkit-transition: all 1s ease-in-out; /* эффект перехода для Chrome до версии 26.0, Safari, Android и iOS */
    -o-transition: all 1s ease-in-out; /* эффект перехода для Opera до версии 12.10 */
    transition: all 1s ease-in-out; /* эффект перехода для других браузеров */
}
.sign00:hover {
    filter: alpha (Opacity=100);
    opacity: 1;
	-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);


   }
   .sign00 figcaption {
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
<figure class="sign00"><a href="http://ccs.kg" target="_blank"><img src="/i/ccc.jpg" width=290" alt=""><figcaption>Спецсвязь</figcaption></figure>
<figure class="sign00"><a href="http://aquaphor.kg" target="_blank"><img src="/i/aquaphor.jpg"  width=290" alt="aquaphor"><figcaption>Аквафор</figcaption></figure>
<figure class="sign00"><a href="http://aidan-express.kg" target="_blank"><img src="/i/aidan.jpg" width=290" alt=""><figcaption>aidan-express</figcaption></figure></a>
</center>

</div><!--/well -->
reklam;

