<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="UCGVyJiFrcnILmlHsaTXHGWp95GYtLk70BbE0JupFI8" />
<meta name="yandex-verification" content="4480c31106d239dc" />
<meta charset="<?=$config['encoding']?>" />
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">

<script src="//code.jivosite.com/widget.js" data-jv-id="SWAOcVJBTj" async></script>
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

<!--<a class="brand" href="<?=$config['sitelink']?>"><?= $config['sitename']?></a>
<img src="<?=$config['sitelink']?>i/logo-small.png" alt="" class="pull-left" style="height:40px;">-->
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
<b>Проектирование | Производство | Монтаж &thinsp;&thinsp; +996 755 95 69 69 &thinsp;&thinsp; info@bsk-pro.kg &thinsp;&thinsp;  <a href="/feedback.html"><font color="#df2b2c">Напишите нам</font></a> &thinsp;&thinsp; график работы с 9.00 до 18.00 Пн-Пт</b>
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
<aside class="span4">
<?=GetBlock($page_blocks, 'menu', $menu )?>
</aside><!--/span-->
<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>

<!--/Коментарии-->
</aside><!--/span-->

</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<style>
.footer-bg {
background: #F2F2F2; /* Цвет фона */
}
</style>
<footer class="container-fluid & footer-bg">
<footer class="container-fluid">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" style="margin:5px 0 0 0;">
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>

<p class="pull-right">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.1111369921755!2d74.54210211547324!3d42.89160187915475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec62aedd1ffb1%3A0x6e512637e1739a35!2z0JHQuNGI0LrQtdC60YHQutCw0Y8g0KHQstCw0YDQvtGH0L3QsNGPINCa0L7QvNC_0LDQvdC40Y8!5e0!3m2!1sru!2skg!4v1572240612755!5m2!1sru!2skg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</p>
<p>
<small>
<b>БСК © <?=date('Y')?></b><br>
Лицензия: ГРЮ КР №0043403
<br> г.Бишкек Ул. Фучика, 47/2
<br>+996 (555) 71-11-77
<br>+996 (505) 71-11-77
<br>+996 (755) 95-69-69 
<br><a href="https://api.whatsapp.com/send?phone=996755956969"><img src="i/whatsapp.png" width="100" height="100" alt="WhatsApp"></a>
<br> <img src="i/email.png" width="30" height="30" alt="email"> <b>info@bsk-pro.kg</b>
<br>
<a href="https://www.facebook.com/bishkekwelding/" target="_blank">Наша страница в <img src="i/facebook.png" width="100" height="100" alt="facebook"></a><br>
<a href="https://www.instagram.com/bishkekwelding/" target="_blank">Наша страница в <img src="i/instagram.png" width="100" height="100" alt="instagram"></a>
<br>
<!-- WWW.NET.KG , code for http://bsk-pro.kg -->
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
 document.write("<a href='http://www.net.kg/stat.php?id=6529&amp;fromsite=6529' target='_blank'>"+
 "<img src='http://www.net.kg/img.php?id=6529&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='31' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=6529&amp;fromsite=6529' target='_blank'><img
  src="http://www.net.kg/img.php?id=6529" border='0' alt='WWW.NET.KG' width='88'
  height='31' /></a>
</noscript>
<!-- /WWW.NET.KG -->
<!--LiveInternet counter--><script type="text/javascript">
document.write('<a href="//www.liveinternet.ru/click" '+
'target="_blank"><img src="//counter.yadro.ru/hit?t14.6;r'+
escape(document.referrer)+((typeof(screen)=='undefined')?'':
';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
';h'+escape(document.title.substring(0,150))+';'+Math.random()+
'" alt="" title="LiveInternet: показано число просмотров за 24'+
' часа, посетителей за 24 часа и за сегодня" '+
'border="0" width="88" height="31"><\/a>')
</script><!--/LiveInternet-->
<a href="https://webmaster.yandex.ru/siteinfo/?site=bsk-pro.kg"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?bsk-pro.kg&theme=light&lang=ru"/></a>
<br>
<sub><a href="https://www.facebook.com/alesunix" target="_blank">developed by alesunix</a></sub>
<br>
Использование материалов без письменного согласия<br>
и ссылки на источник запрещено.<br>
<video src="i/video.mp4" width="330" poster="i/photo2.jpg" controls></video>
</small>
</p>
</footer>
<!--/footer -->
<!--/Google статистика -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45405429-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-7');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56014573, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56014573" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


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
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="flowplay/flowplayer-3.2.2.min.js"></script>
</body></html>