<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="yandex-verification" content="2e90a3816dd90ffc" />
<meta name="google-site-verification" content="m16yXNLNA45nHR2RDE6DU0uOalOuNi_QPvmx1nnfPaE" />
<meta charset="<?=$config['encoding']?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$title?></title>
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">

<link rel="stylesheet" type="text/css" href="/css/menu.css" />
<link rel="stylesheet" href="<?=$config['sitelink']?>/template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">

<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!--Favicon-->

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- OPEN GRAPH -->
<meta property="og:title" content="Служба специальной связи Кыргызской Республики">
<meta property="og:site_name" content="Служба специальной связи">
<meta property="og:url" content="https://ccs.kg">
<meta property="og:description" content="Обеспечивает доставку всех видов корреспонденции, включая секретную, ценных и специальных грузов в любую точку Кыргызской Республики и за рубеж">
<meta property="og:type" content="website">
<meta property="og:image" content="https://ccs.kg/i/logo-small.png">
<!-- OPEN GRAPH -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://ccs.kg/",
  "name": "Служба Специальной Связи Кыргызской Республики",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996312660834",
    "contactType": "Customer service"
  }
}
</script>
<link rel="canonical" href="<?=$config['sitelink']?>" />
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
<!--<a class="brand" href="<?=$config['sitelink']?>"><?= $config['sitename']?></a><img src="<?=$config['sitelink']?>i/logo-small.png" alt="спецсвязь" class="pull-left" style="height:40px;">
<img src="<?=$config['sitelink']?>i/logo-small.png" alt="спецсвязь" class="pull-left" style="height:40px;">-->
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><span class="text-info">&nbsp;<?=$config['sitename']?></span></a>
<div class="nav-collapse collapse">
<ul class="nav pull-right">
<?=GetMenuItems($this_page, $mainmenu, $category)?>
</ul>
<!--
<div class="langcontainer">
<a href="" rel="nofollow" data-google-lang="ru"><img src="/img/lang/lang__ru.png" alt="ru" data-google-lang="ru" class="language__img" width="40"> </a>
<a href="" rel="nofollow" data-google-lang="ky"><img src="/img/lang/lang__ky.png" alt="ky" data-google-lang="ky" class="language__img" width="40"> </a>
</div>-->
</div>
</div>
</nav>

<!--Page Progress Bar-->
<!--<div class="progress-label"></div>-->
<progress></progress>
<!--</div>-->
<!--Page Progress Bar-->

</header>
<!--/header-->
<!--content-->
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h3 class="muted"><?=$config['slogan']?></h3>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<h1><?=$title;?></font></h1>
<?=$content;?>
</article><!--/span-->

<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'holiday', $holiday )?>
<?=GetBlock($page_blocks, 'contact', $contact )?>
<?=GetBlock($page_blocks, 'info', $info )?>
<?=GetBlock($page_blocks, 'Priorities', $Priorities )?>
<?=GetBlock($page_blocks, 'history', $history )?>
<?=GetBlock($page_blocks, 'Interactive', $Interactive )?>
<?=GetBlock($page_blocks, 'state', $state )?>
<?=GetBlock($page_blocks, 'obituary', $obituary )?>
<?=GetBlock($page_blocks, 'resume', $resume )?>
<?=GetBlock($page_blocks, 'facebook', $facebook )?>
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
<div class="footer">
		<div class="footer-content">
<div class="footer-silection-left">
<b>Наши задачи:</b><br>
Предоставление услуг спецсвязи по перевозке спецотправлений <br>
органов государственной власти и управления, а также госучреждений.
</div>
<div class="footer-silection-center">
<!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank" rel="nofollow"><img id="licntB7EE" width="88" height="31" style="border:0" 
title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licntB7EE").src=
"https://counter.yadro.ru/hit?t15.5;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->

<!-- WWW.NET.KG , code for http://ccs.kg -->
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
 document.write("<a href='http://www.net.kg/stat.php?id=6050&amp;fromsite=6050' target='_blank' rel='nofollow'>"+
 "<img src='http://www.net.kg/img.php?id=6050&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='66' /></a>");
</script>
<!-- /WWW.NET.KG -->
<br>
<a href="https://webmaster.yandex.ru/siteinfo/?site=https://ccs.kg" rel="nofollow"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?https://ccs.kg&theme=light&lang=en"/></a>
<br>
</div>
<div class="footer-silection-right">
Контакты:<br>
Дежурная часть - 0312 625-982<br>
Экспедиция - 0312 660-834<br>
720040, г. Бишкек, ул. Раззакова 55<br>
Электронный адрес: ccs@ccs.kg
</div>
</div>
<div class="footer-bottom">
<span><a href="https://alesunix.github.io/" target="_blank" rel="nofollow">
Copyright &copy; 1939 — <script type="text/javascript">dt = new Date();document.write(dt.getFullYear());</script> ГП «Служба специальной связи» | Designed by Alesunix </a></span>
<br>Использование материалов без письменного согласия и ссылки на источник запрещено.
</div>
</div>
</footer>
<!--/footer -->

<link rel="stylesheet" href="<?=$config['sitelink']?>/template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>/template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<link rel="stylesheet" type="text/css" href="/css/stylebutton.css" />
<link rel="stylesheet" type="text/css" href="/css/styleheader.css" />
<link rel="stylesheet" type="text/css" href="/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="/css/card.css" />
<link rel="stylesheet" type="text/css" href="/css/styletable.css" />
<link rel="stylesheet" type="text/css" href="/css/Page-Progress-Bar.css" />

<!--/Карта -->
<link rel="stylesheet" type="text/css" href="/map/svg.css" />
<script src="map/tooltip.js" type="text/javascript"></script>
<!--/Карта -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>
<script src="/template/bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>

<!-- google-translate 
<link rel="stylesheet" href="/css/translate.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/js/google-translate.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
 google-translate -->

<!--/Google статистика -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45405429-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-4');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56014606, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56014606" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--Page Progress Bar-->
<script type="text/javascript">
$(document).ready(function() {
  const win = $(window);
  const doc = $(document);
  const progressBar = $('progress');
  const progressLabel = $('.progress-label');
  const setValue = () => win.scrollTop();
  const setMax = () => doc.height() - win.height();
  const setPercent = () => Math.round(win.scrollTop() / (doc.height() - win.height()) * 100);
  
  progressLabel.text(setPercent() + '%');
  progressBar.attr({ value: setValue(), max: setMax() });

  doc.on('scroll', () => {
    progressLabel.text(setPercent() + '%');
    progressBar.attr({ value: setValue() });
  });
  
  win.on('resize', () => {
    progressLabel.text(setPercent() + '%');
    progressBar.attr({ value: setValue(), max: setMax() });
  })
});
</script>
<!--Page Progress Bar-->

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