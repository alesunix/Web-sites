<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="J2vrRbZhbOeEi-BFnj3AUunTg1k8hStHBZyfpmMNwgU" /><!--регистрация в google.com-->
<meta name="yandex-verification" content="c9e3785a77e73815" /> <!--регистрация в Яндекс-->

<meta charset="<?=$config['encoding']?>" />
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- Favicon -->

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- OPEN GRAPH -->
<meta property="og:title" content="ОсОО Аквафор плюс Фильтры и системы очистки воды | Бишкек">
<meta property="og:site_name" content="ОсОО Аквафор плюс">
<meta property="og:url" content="https://aquaphor.kg/">
<meta property="og:description" content="Официальный сайт ОсОО Аквафор плюс. Продажа фильтров и доставка по Бишкеку и всему Кыргызстану">
<meta property="og:type" content="website">
<meta property="og:image" content="https://aquaphor.kg/i/logo.png">
<!-- OPEN GRAPH -->

<link rel="canonical" href="<?=$config['sitelink']?>" />
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://aquaphor.kg",
  "name": "Фильтры для очистки воды и системы очистки Аквафор",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996312900410",
    "contactType": "Customer service"
  }
}
</script>
</head>
<body>
<!--google переводчик-->


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

<!--<img src="<?=$config['sitelink']?>i/logo-small.png" alt="alesunix" class="pull-left" style="height:40px;">-->
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><b><big><span class="text-info">&nbsp;<?=$config['sitename']?></span></a></b></big>

<div class="nav-collapse collapse">
<ul class="nav pull-right">
<?=GetMenuItems($this_page, $mainmenu, $category)?>
</ul>
</div>
</div>
</nav>
</header>
<!--/header-->
<!--content-->

<style>
.hide{ visibility: hidden; }<!--Стиль скрытия title -->
</style>
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h3 class="muted"><?=$config['slogan']?></h3>
<h3><a href="<?=$config['sitelink']?>"><img src="/i/logo.png"></a>Фильтры для очистки воды и системы очистки Аквафор
<p align="right"><font size=2px>Адрес: г. Бишкек, ул. Киевская 77 (у остановки здания Илбирс) <br>
Телефоны: (0312) 900 - 410; (0700) 419 - 000; (0551) 445 - 344; (0772) 539 - 348</p></font></h3>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<!--DIV title hide --><div class="hide"><h1><?=$title;?></h1></div><!--/DIV title hide -->
<?=$content;?>
</article><!--/span-->

<!--/Установка новостей-->
<?php
  
?>
<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'catalog', $catalog )?>
<?=GetBlock($page_blocks, 'reviews', $reviews )?>
<?=GetBlock($page_blocks, 'catalog2', $catalog2 )?>
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'stock', $stock )?>
<?=GetBlock($page_blocks, 'news', $news )?>
<?=GetBlock($page_blocks, 'waterboss', $waterboss )?>



</aside><!--/span-->
</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<footer class="container-fluid" style="background: #0063a8;">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" >
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>

<div class="footer">
<div class="footer-content">
<div class="footer-silection-left">
<?=date('Y')?> © "Аквафор плюс" Официальный представитель в Кыргызстане!<br>
Мы заботимся о том, чтобы наши покупатели получали продукт высшего качества.<br>
Главной целью компании является безопасность потребителя, <br>
и её достижение подтверждается сертификатом соответствия, <br>
высоким международным стандартам от ведущих независимых организаций.
</div>
<div class="footer-silection-center">
<!-- WWW.NET.KG , code for http://aquaphor.kg -->
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
 document.write("<a href='http://www.net.kg/stat.php?id=5253&amp;fromsite=5253' target='_blank' rel='nofollow'>"+
 "<img src='http://www.net.kg/img.php?id=5253&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='31' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=5253&amp;fromsite=5253' target='_blank' rel='nofollow'><img
  src="http://www.net.kg/img.php?id=5253" border='0' alt='WWW.NET.KG' width='88'
  height='31' /></a>
</noscript>
<!-- /WWW.NET.KG -->

<!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank" rel="nofollow"><img id="licnt8530" width="88" height="31" style="border:0" 
title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licnt8530").src=
"https://counter.yadro.ru/hit?t11.1;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->

<!--Informer.kg code start-->
<img src="http://www.informer.kg/pog/pngs/informer19.png" width="88" height="31" alt="Погода в Кыргызстане" border="0" />
<img src="http://www.informer.kg/cur/pngs/informer34.png" width="88" height="31" alt="Курс валют" border="0" />
<img src="http://100btc.ru/informer/BTC-USD_88x31.png" border="0" title="Bitcoin" width="88" height="31" alt="Курс Bitcoin к USD">
<!-- Informer.kg code end-->
</div>
<div class="footer-silection-right">
Фирменный магазин "Аквафор плюс" <br>
Адрес: г. Бишкек, ул. Киевская 77 <br>
(у остановки здания Илбирс)<br>
Телефон: (0312) 900 - 410;<br>
(0701) 811 - 331; <br>
(0551) 445 - 344;<br>
(0772) 539 - 348;
</div>
</div>

<div class="footer-bottom">
<span><a href="https://alesunix.github.io/" target="_blank" rel="nofollow">
Copyright &copy; <script type="text/javascript">dt = new Date();document.write(dt.getFullYear());</script> ОсОО "Аквафор плюс" | Designed by Alesunix </a></span>
<br>Использование материалов без письменного согласия и ссылки на источник запрещено.
</div>
</div>
</footer>
<!--/footer -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="/css/styleAdmin.css" />
<link rel="stylesheet" href="/css/style.css" />
<link rel="stylesheet" href="/css/swiper.min.css" />
<link rel="stylesheet" href="/css/stylebutton3.css" />
<link rel="stylesheet" href="/css/styleModal.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>
<script src="/template/bootstrap/js/bootstrap.min.js"></script>

<script src="js/swiper.min.js"></script>

<!-- Для главного слайда - эффект появления -->
  <script>
    var swiper2 = new Swiper('.swiper-slide', {
      spaceBetween: 30,
      effect: 'fade',
	  autoplay: {
      delay: 5500,
      disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
<!-- Swiper JS -->

<!--/Google статистика -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-45405429-3', 'auto');
ga('send', 'pageview');

</script>

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
<!--Кнопка вверх--->
<script>
$(document).ready(function() {

$('body').append('<div class="button-up" style="display: none;opacity: 0.7;width: 70px;height:100%;position: fixed;left: 0px;top: 0px;cursor: pointer;text-align: center;line-height: 100px;color: #45688E;">^ Наверх</div>');

$ (window).scroll (function () {
if ($ (this).scrollTop () > 300) {
$ ('.button-up').fadeIn();
} else {
$ ('.button-up').fadeOut();
}
});

$('.button-up').click(function(){
$('body,html').animate({
scrollTop: 0
}, 100);
return false;
});

$('.button-up').hover(function() {
$(this).animate({
'opacity':'1',
}).css({'background-color':'#E1E7ED','color':'#45688E'});
}, function(){
$(this).animate({
'opacity':'0.7'
}).css({'background':'none','color':'#45688E'});;
});

});
</script><!--/Кнопка вверх--->


</body></html>