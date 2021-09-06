<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="IZeF0bRbcx5p2VrWey9Y-qSpxpTP-XoW_iZuj0g_Ozw" /><!--регистрация в google.com-->
<meta charset="<?=$config['encoding']?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$title?></title>
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">

	 <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
     <link rel="shortcut icon" href="/favicon.ico" />
     
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="css/style2.css" />
	 <link rel="stylesheet" type="text/css" href="css/style.css" />	
	 <link rel="stylesheet" type="text/css" href="css/animate.css" />
	 <link rel="stylesheet" href="css/fonts.css"> 
	 <link rel="stylesheet" href="css/Bubblystyles.css">
	 <link rel="stylesheet" href="css/button.css">
	
</head>
<body>




<!--header-->
<header class="navbar navbar-fixed-top">
<nav class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<!--<a class="brand" href="<?=$config['sitelink']?>"><?= $config['sitename']?></a>-->
<!--<img src="<?=$config['sitelink']?>i/logo-small.png" alt="microText" class="pull-left" style="height:40px;">-->
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><b><span class="text-info">&nbsp;<?=$config['sitename']?></span></a></b>
<div class="nav-collapse collapse">
<ul class="nav pull-right">
<?=GetMenuItems($this_page, $mainmenu, $category)?>
<!--google переводчик
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'en,zh-TW', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
-->
</ul>
</div>
</div>
</nav>
</header>
<!--/header-->
<!--content-->
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h2 class="muted"><?=$config['slogan']?></h2>
<p align="right"><font size=2px><h4>Наш Адрес: г. Бишкек, ул. </h4></font></p>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">

<h1><?=$title;?></h1>
<?=$content;?>
</article><!--/span-->
<!--/Установка новостей-->
<?php
?>
<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'reklam', $reklam )?>
<?=GetBlock($page_blocks, 'donate', $donate )?>

<!--/Коментарии-->




<!--Соцсети-->

<!--Соцсети-->
</aside><!--/span-->
</div><!--/row-->
</section>
<!--/content-->


<!--footer-->
<style>
.footer-bg {
background-image: url(/i/footer.png);
}
</style>
<footer class="container-fluid & footer-bg">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" style="margin:5px 0 0 0;">
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>

<font size=2px>
<p class="pull-right"><small>
Лицензия: № 
<br> г.Бишкек Ул. 
<br> Телефон: (0312) 
<br> E-mail: <br>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51361969 = new Ya.Metrika2({
                    id:51361969,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<!-- WWW.NET.KG , code for http://aidan-express.kg -->
<script language="javascript" type="text/javascript">
 java="1.0";
 java1=""+"refer="+escape(document.referrer)+"&amp;page="+escape(window.location.href);
 document.cookie="astratop=1; path=/";
 java1+="&amp;c="+(document.cookie?"yes":"now");
</script>
<script language="javascript1.1" type="text/javascript">
 java="1.1";
 java1+="&amp;java="+(navigator.javaEnabled()?"yes":"now");
</script>
<script language="javascript1.2" type="text/javascript">
 java="1.2";
 java1+="&amp;razresh="+screen.width+'x'+screen.height+"&amp;cvet="+
 (((navigator.appName.substring(0,3)=="Mic"))?
 screen.colorDepth:screen.pixelDepth);
</script>
<script language="javascript1.3" type="text/javascript">java="1.3"</script>
<script language="javascript" type="text/javascript">
 java1+="&amp;jscript="+java+"&amp;rand="+Math.random();
 document.write("<a href='http://www.net.kg/stat.php?id=6232&amp;fromsite=6232' target='_blank'>"+
 "<img src='http://www.net.kg/img.php?id=6232&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='31' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=6232&amp;fromsite=6232' target='_blank'><img
  src="http://www.net.kg/img.php?id=6232" border='0' alt='WWW.NET.KG' width='88'
  height='31' /></a>
</noscript>
<!-- /WWW.NET.KG -->
<br>
</p>

<style>
   .shadow  {
	face="Arial";
    text-shadow: 1px 1px 1px #fff; /* Параметры тени */
   }
</style>
 <tagname class="shadow">
<?=date('Y')?> © ОсОО Termorus<br>
Слоган.<br>
Использование материалов без письменного согласия и ссылки на источник запрещено.<br>
</tagname>
</font></dfn></small>
<br>
<!--Informer.kg code start-->
<img src="http://www.informer.kg/pog/pngs/informer21.png" width="88" height="31" alt="Погода в Кыргызстане" border="0" />
<img src="http://www.informer.kg/cur/pngs/informer36.png" width="88" height="31" alt="Курс валют" border="0" />
<sub><a href="https://www.facebook.com/alesunix" target="_blank">developed by alesunix</a></sub>
<!-- Informer.kg code end-->
</footer>
<!--/footer -->
<!--/Google статистика -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45405429-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-6');
</script>

<!--Кнопка вверх--->
<DIV ID = "toTop" > ^ Наверх </ DIV >
<script type="text/javascript">
 
$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});
 
</script>
<!--/Кнопка вверх--->

<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>

<!--tooltips--->
<script type="text/javascript">
$(window).resize(function() {
if ($(window).width() < 979) {
$('aside a').tooltip('destroy');
$('header ul.nav.pull-right li:last-child a').tooltip('destroy');
$('aside a').tooltip({
placement: "top"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "top"
});
}
else {
$('header ul.nav.pull-right li:last-child a').tooltip('destroy');
$('aside a').tooltip('destroy');
$('aside a').tooltip({
placement: "left"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "bottom"
});
}
});

if ($(window).width() < 979) {
$('aside a').tooltip({
placement: "top"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "top"
});
}
else {
$('aside a').tooltip({
placement: "left"
});
}
$('header a').tooltip({
placement: "bottom"
});
$('a,label,input').tooltip({});
</script>
<!--/tooltips--->

<!--Анимированный Фон--->

<!--/Анимированный Фон--->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>

</body></html>