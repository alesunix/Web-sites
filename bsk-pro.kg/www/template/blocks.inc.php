<?php
# Дополнительные блоки данных
# Добавляйте сколько угодно. Не забудьте вставить переменную в design.inc.php или на страницу в папке content/

$newsblock = <<<newsblock
<div class='well well-small'>
<style>
   P { 
    text-indent: 1.5em; /* Отступ первой строки */
    text-align: justify; /* Выравнивание по ширине */
   }
  </style>
<p>&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
<strong>Завод по изготовлению металлоконструкций в Бишкеке</strong><br>
<p>
Производственная деятельность «БСК» включает в себя широкий перечень 
по обработке и изготовлению металлоконструкций любой сложности и 
предназначения. Предприятие имеет цеха по производству строительных 
металлоконструкций негабаритных размеров.
<br><br>
- металлоизделия;<br>
- нестандартные металлоконструкции;<br>
- крупногабаритные металлоконструкции.<br><br>

<p>&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
<strong>Делаем для вас - Полный комплекс мероприятий:</strong><br></p>

<h5 style="color:#df2b2c">
Проектирование металлоконструкций;<br>
Изготовление металлоконструкций;<br>
Монтаж металлоконструкций.<br>
</h5>
    <p>Наш завод является надежным производителем и поставщиком 
металлоконструкций на территории Кыргызской Республики. Все этапы 
технологического процесса на заводе контролируются отделом 
ОТК, что позволяет выполнять работу в надлежащем качестве и в установленные 
сроки осуществлять отгрузку готовых металлоконструкций заказчику. 
</p>
</div><!--/well -->

newsblock;

$menu = <<<menu
<div class='well well-small'>
<table class="bordered">
<caption><b><big>      </b></big></caption>
<tr><th colspan="2"><a href="/feedback.html" class="knopka">Напишите нам</a></th></tr>
<td><br></td></tr>
<tr><td><a href="/company.html">Металлоконструкции</a></td></tr>
<td><a href="/company.html">Проектирование</a></td></tr>  
<td><a href="/sandwich.html">Сендвич-панели</a></td></tr>
<td><a href="/company.html">Монтаж</a></td></tr>
<td><br></td></tr>
<td><b><h3>Специальное предложение<br><img src="/i/panel.png" width=250 alt="BSK"></b></h3><br>
При оформлении заказа на сэндвич-<br>
панели от 500м2 возможны скидки и <br>
бонусы,которые вы можете обсудить <br>
с менеджером. <br> <a href="/sandwich.html">Подробнее.... </a></td></tr>
</table>
</div><!--/well -->

<style>
a.knopka {
  color: #fff; /* цвет текста */
  text-decoration: none; /* убирать подчёркивание у ссылок */
  user-select: none; /* убирать выделение текста */
  background: rgb(212,75,56); /* фон кнопки */
  padding: .7em 1.5em; /* отступ от текста */
  outline: none; /* убирать контур в Mozilla */
} 
a.knopka:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
a.knopka:active { background: rgb(152,15,0); } /* при нажатии */
</style>


menu;

