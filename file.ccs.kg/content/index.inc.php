<?php

# Данные о странице
$title = '';
$keywords = '';
$description = '';
$template = 'info';
$page_blocks = 'newsblock';

# Содержание страницы
$content = <<<EOF
<center>
<a href='/client/upload.html'><button id="button" type="button" class="button4">- Войти -</button></a>
<br>
<img src="/i/Logo_mini.png" alt="" width="400" height="400"><br>
</center>

<style type="text/css">

button.new {
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
button.button24:hover { background: linear-gradient(#f5ae00, #f59500) #f5ae00; }
button.button24:active { background: linear-gradient(#f59500, #f5ae00) #f59500; }


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
  background: #eeefef linear-gradient(#fffcf3, #282e35);
  box-shadow: inset #000002 0 -1px 1px, inset 0 1px 1px #f0f0f1, #b2b4b7 0 0 0 1px, rgba(0,0,0,.3) 0 2px 5px;
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

button.button22 {
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
button.button22:hover {
  background: linear-gradient(#d2dfea, #71828c);
}
button.button22:active {
  line-height: 2.6em;
  background: linear-gradient(#bac6cf, #c5d3de 20%, #71828c);
  box-shadow: 0 -1px rgba(255,255,255,.4) inset;
}
button.button22:before {
  content: "";
  position: absolute;
  top: -10px; right: -10px; bottom: -10px; left: -10px;
  z-index: -1;
  border-radius: 8px;
  background: linear-gradient(rgba(200,200,200,.5), rgba(240,240,240,.5));
}
  </style>
EOF;

			