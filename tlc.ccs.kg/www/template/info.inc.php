<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="m16yXNLNA45nHR2RDE6DU0uOalOuNi_QPvmx1nnfPaE" />
<meta charset="<?=$config['encoding']?>" />
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://tlc.ccs.kg/",
  "name": "Транспортно - логистический центр ЭКСПРЕСС ДОСТАВКА ДОКУМЕНТЫ, ПОСЫЛКИ И ГРУЗЫ ПО КЫРГЫЗСТАНУ И ВСЕМУ МИРУ",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996312461938",
    "contactType": "Customer service"
  }
}
</script>
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
<img src="<?=$config['sitelink']?>i/logo-small.png" alt="microText" class="pull-left" style="height:40px;">
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><b><span class="text-info">&nbsp;<?=$config['sitename']?></span></a></b>
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
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h3 class="muted"><?=$config['slogan']?></h3>
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
<?=GetBlock($page_blocks, 'donate', $donate )?>
<?=GetBlock($page_blocks, 'reklam', $reklam )?>
<!--/Коментарии-->


</aside><!--/span-->
</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<footer class="container-fluid">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" style="margin:5px 0 0 0;">
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>
<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter" data-counter=""></div>

<p class="pull-right">
Лицензия: ГАС КР 15-1400
<br> г.Бишкек Ул. И.Раззакова, 55
<br> Телефон: (0312) 661-836
<br> E-mail: tlc@ccs.kg
<!-- WWW.NET.KG , code for http://tlc.ccs.kg -->
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
 document.write("<a href='http://www.net.kg/stat.php?id=5258&amp;fromsite=5258' target='_blank'>"+
 "<img src='http://www.net.kg/img.php?id=5258&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='31' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=5258&amp;fromsite=5258' target='_blank'><img
  src="http://www.net.kg/img.php?id=5258" border='0' alt='WWW.NET.KG' width='88'
  height='31' /></a>
</noscript>
<!-- /WWW.NET.KG -->


</p>
<p>
<small><?=date('Y')?> © ЭКСПРЕСС ДОСТАВКА <br>
ДОКУМЕНТЫ, ПОСЫЛКИ И ГРУЗЫ ПО КЫРГЫЗСТАНУ И ВСЕМУ МИРУ.<br>
Использование материалов без письменного согласия и ссылки на источник запрещено.<br>
<a href="https://www.facebook.com/TLC-Express-1583417338626448/" target="_blank">Наша страница в facebook.com</a>
</font></b></dfn></small>
<br>
<sub><a href="https://alesunix.github.io/" target="_blank">Designed by Alesunix</a></sub>
</small>
<!--Informer.kg code start-->
<img src="http://www.informer.kg/pog/pngs/informer21.png" width="88" height="31" alt="Погода в Кыргызстане" border="0" />

<img src="http://www.informer.kg/cur/pngs/informer36.png" width="88" height="31" alt="Курс валют" border="0" />
<!-- Informer.kg code end-->
</p>
</footer>
<!--/footer -->
<!--/Google статистика -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-45405429-2', 'auto');
ga('send', 'pageview');
</script>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>
<script src="/template/bootstrap/js/bootstrap.min.js"></script>

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

</body></html>