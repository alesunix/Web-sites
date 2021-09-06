<?php
#script start
# Ограничение доступа
if (!CheckLogin($config['upload_login'], $config['upload_password']))
	die('Доступ запрещён.');
#script end

# Данные о странице
$title = 'Загрузка';
$keywords = '';
$description = '';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<table class="bordered">
<tr><th colspan="2">Выбирите Excel файл - реестр для загрузки на сайт</th></tr>
</table>
      <form action="/upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" value="Загрузить"><br>
      </form>
	  
	  <hr>
<table class="bordered">
<tr><th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th><th>    </th><th colspan="2"><h1>Инструкция</h1></th></tr>
<tr><td>  </td><td>1.  </td><td>Скачайте шаблон реестра    </td></tr>
<tr><td>  </td><td>2.  </td><td>Переименуйте название файла в название своего банка.    </td></tr>
<tr><td>  </td><td>3.  </td><td>Заполните файл.    </td></tr>
<tr><td>  </td><td>4.  </td><td>Загрузите файл.    </td></tr>
<tr><td>  </td><td>5.  </td><td>Скачанный шаблон используется для последующих загрузок.    </td></tr>
</table>
	 <hr>
	  <p align="right"><a href='/content/client/Шаблон реестра.xlsx'><button id="button" type="button" class="button13">Скачать шаблон реестра</button></a></p>
	  <hr>
	  
	  
<style type="text/css">

input.new {
  display: inline-block;
  color: white;
  text-decoration: none;
  padding: .5em 2em;
  outline: none;
  border-width: 2px 0;
  border-style: solid none;
  border-color: #FDBE33 #000 #D77206;
  border-radius: 6px;
  background: linear-gradient(#F3AE0F, #E38916) #E38916;
  transition: 0.2s;
} 
input.button24:hover { background: linear-gradient(#f5ae00, #f59500) #f5ae00; }
input.button24:active { background: linear-gradient(#f59500, #f5ae00) #f59500; }


button.button13 {
  display: inline-block;
  width: 15em;
  font-size: 80%;
  color: rgba(255,255,255,.9);
  text-shadow: #2e7ebd 0 1px 2px;
  text-decoration: none;
  text-align: center;
  line-height: 1.1;
  white-space: pre-line;
  padding: .7em 0;
  border: 1px solid;
  border-color: #60a3d8 #2970a9 #2970a9 #60a3d8;
  border-radius: 6px;
  outline: none;
  background: #60a3d8 linear-gradient(#89bbe2, #60a3d8 50%, #378bce);
  box-shadow: inset rgba(255,255,255,.5) 1px 1px;
}
button.button13:first-line{
  font-size: 170%;
  font-weight: 700;
}
button.button13:hover {
  color: rgb(255,255,255);
  background-image: linear-gradient(#9dc7e7, #74afdd 50%, #378bce);
}
button.button13:active {
  color: rgb(255,255,255);
  border-color: #2970a9;
  background-image: linear-gradient(#5796c8, #6aa2ce);
  box-shadow: none;
}

button.button4 {
  position: relative;
  display: inline-block;
  font-family: Arial,Helvetica,FreeSans,"Liberation Sans","Nimbus Sans L",sans-serif;
  font-size: 1.5em;
  font-weight: 700;
  color: rgb(245,245,245);
  text-shadow: 0 -1px rgba(0,0,0,.1);
  text-decoration: none;
  user-select: none;
  padding: .3em 1em;
  outline: none;
  border: none;
  border-radius: 3px;
  background: #0c9c0d linear-gradient(#82d18d, #0c9c0d);
  box-shadow: inset #72de26 0 -1px 1px, inset 0 1px 1px #98ff98, #3caa3c 0 0 0 1px, rgba(0,0,0,.3) 0 2px 5px;
  -webkit-animation: pulsate 1.2s linear infinite;
  animation: pulsate 1.2s linear infinite;
}
button.button4:hover {
  -webkit-animation-play-state: paused;
  animation-play-state: paused;
  cursor: pointer;
}
button.button4:active {
  top: 1px;
  color: #fff;
  text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff;
  box-shadow: 0 -1px 3px rgba(0,0,0,.3), 0 1px 1px #fff, inset 0 1px 2px rgba(0,0,0,.8), inset 0 -1px 0 rgba(0,0,0,.05);
}
@-webkit-keyframes pulsate {
  50% {color: #fff; text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff;}
}
@keyframes pulsate {
  50% {color: #fff; text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff;}
}

input.button22 {
  position: relative;
  display: inline-block;
  width: 6em;
  height: 2.5em;
  line-height: 2.4em;
  vertical-align: middle;
  text-align: center;
  text-decoration: none;
  user-select: none;
  color: #000;
  outline: none;
  border: 1px solid rgba(110,121,128,.8);
  border-top-color: rgba(0,0,0,.3);
  border-radius: 5px;
  background: rgb(206, 220, 231) linear-gradient(rgb(206,220,231), rgb(89,106,114));
  box-shadow:
   0 -1px rgba(10,21,28,.9) inset,
   0 1px rgba(255,255,255,.5) inset;
}
input.button22:hover {
  background: linear-gradient(#d2dfea, #71828c);
}
input.button22:active {
  line-height: 2.6em;
  background: linear-gradient(#bac6cf, #c5d3de 20%, #71828c);
  box-shadow: 0 -1px rgba(255,255,255,.4) inset;
}
input.button22:before {
  content: "";
  position: absolute;
  top: -10px; right: -10px; bottom: -10px; left: -10px;
  z-index: -1;
  border-radius: 8px;
  background: linear-gradient(rgba(200,200,200,.5), rgba(240,240,240,.5));
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
    text-align: left;    
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
