<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="IZeF0bRbcx5p2VrWey9Y-qSpxpTP-XoW_iZuj0g_Ozw" />
<meta name="yandex-verification" content="acbc44847f6a13cf" />

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
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://aidan-express.kg/",
  "name": "aidan-express ЭКСПРЕСС ДОСТАВКА ДОКУМЕНТЫ, ПОСЫЛКИ И ГРУЗЫ ПО КЫРГЫЗСТАНУ И ВСЕМУ МИРУ",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996555-333103",
    "contactType": "Customer service"
  }
}
</script>
<!-- OPEN GRAPH -->
<meta property="og:locale" content="ru_RU">
<meta property="og:title" content="ОсОО «Айдан-экспресс» перевозка документов, посылок и грузов по Кыргызстану и всему миру." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://aidan-express.kg/" />
<meta property="og:image" content="https://aidan-express.kg/i/logo.png" />
<meta property="og:description" content="Обеспечиваем сохранность и доставку отправлений, грузов в кротчайшие сроки по Кыргызстану, всей России и за рубеж. Офис в Бишкеке, ул. Раззакова 55" />
<meta property="og:site_name" content="Aidan-Express" />
<!-- OPEN GRAPH -->
<link rel="image_src" href="https://aidan-express.kg/i/logo.png">	
<link rel="canonical" href="https://aidan-express.kg/" />

<script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>	
</head>
<body>
<script type="text/javascript">
  VK.init({
    apiId: 6767620,
    onlyWidgets: true
  });
</script>

<!--header-->
<header class="navbar navbar-fixed-top">
<nav class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
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
<h2 class="muted"><?=$config['slogan']?>
<div class="headerstyle">
<div class="tabstyle">
<a href="<?=$config['sitelink']?>"><img src="i/logo.png" alt="Айдан-экспресс" style="width:95px;"></a>
<br><small>Удобно, надежно и в срок </small>
</div>
<div class="tabstyle">
<small>Наш Адрес: <br>  
г. Бишкек, ул. Рижская, 20</small>
</div>
<div class="tabstyle">
<small>График работы<br>  
с 8.00 до 18.00<br>  
Пн-Пт </small>
</div>
<div class="tabstyle">
<small>
+996 (557) 55-66-55 <br>  
+996 (553) 00-61-61 <br> 
aidan-express@mail.ru <br> 
</small>
</div></div></h2>

<div class="row-fluid">
<article class="span9 well well-large well-inverse">

<h1><?=$title;?></h1>
<?=$content;?>
</article><!--/span-->

<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'reklam', $reklam )?>
<?=GetBlock($page_blocks, 'donate', $donate )?>
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
Сервис предоставляет клиентам спектр услуг <br>
по доставке и отслеживанию Экспресс-отправлений и грузов.<br>
Доставка происходит в соответствии с принятыми нормами качества.<br>
</div>
<div class="footer-silection-center">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(67613635, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/67613635" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank" rel="nofollow"><img id="licnt3ED4" width="88" height="31" style="border:0" 
title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licnt3ED4").src=
"https://counter.yadro.ru/hit?t13.6;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
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
 document.write("<a href='http://www.net.kg/stat.php?id=6232&amp;fromsite=6232' target='_blank' rel='nofollow'>"+
 "<img src='http://www.net.kg/img.php?id=6232&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='31' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=6232&amp;fromsite=6232' target='_blank' rel='nofollow'><img
  src="http://www.net.kg/img.php?id=6232" border='0' alt='WWW.NET.KG' width='88'
  height='31' /></a>
</noscript>
<!-- /WWW.NET.KG -->
<img src="http://100btc.ru/informer/BTC-USD_88x31.png" border="0" title="Bitcoin" width="88" height="31" alt="Курс Bitcoin к USD">
<img src="http://www.informer.kg/cur/pngs/informer36.png" width="88" height="31" alt="Курс валют" border="0" />
</div>
<div class="footer-silection-right">
Лицензия: № ГРЮ №00044289
<br> г.Бишкек Ул. Рижская, 20
<br> Телефон: (0553) 00-61-61 
<br> E-mail: aidan-express@mail.ru<br>
</div>
</div>
<div class="footer-bottom">
<a href="https://alesunix.github.io/" target="_blank" rel="nofollow"> 
Copyright &copy; <script type="text/javascript">dt = new Date();document.write(dt.getFullYear());</script> ОсОО «Айдан-экспресс» | Designed by Alesunix </a>
<br>Использование материалов без письменного согласия и ссылки на источник запрещено.
</div>
</div>
</footer>
<!--/footer -->

<!--/Кнопка Ватсап -->
<a href="https://api.whatsapp.com/send?phone=996557556655" class="float" target="_blank" rel="nofollow">
<i class="fa fa-whatsapp my-float"></i></a>
<!--/Кнопка Ватсап -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	 <link rel="stylesheet" type="text/css" href="css/style.css" />	
	 <link rel="stylesheet" href="css/fonts.css"> 
	 <link rel="stylesheet" href="css/swiper.min.css">	 
	 <link rel="stylesheet" href="css/Slider.css">
	 <link rel="stylesheet" type="text/css" href="css/styleheader.css" />
	 <link rel="stylesheet" type="text/css" href="css/stylebutton.css" />
	 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="template/bootstrap/js/bootstrap.min.js"></script>
<script src="template/bootstrap/js/bootstrap.min.js"></script>
<!--/Google статистика -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45405429-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-6');
</script>

<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
  </script>
<script>
$(document).ready(function(){
			$('#button_contacts').click(function(){
				// собираем данные с формы
				var form_name 	 = $('#form_name').val();
				var form_email 	 = $('#form_email').val();
				var form_message = $('#form_message').val();
				// отправляем данные
				$.ajax({
					url: "/feedback.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_name": 	form_name,
						"form_email": 	form_email,
						"form_message": form_message
					},
					// после получения ответа сервера
					success: function(data){
						$('.messages').html(data.result); // выводим ответ сервера
					}
				});
			});
		});
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
</body></html>