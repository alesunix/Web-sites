<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="7O-1xVrVUNYmDsIppV9P-bFIxnbTuozIcQYV_hrrVYg" />
<meta name="yandex-verification" content="a7953a7a36f6a0d7" />
<meta charset="<?=$config['encoding']?>" />
<title><?=$title?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- favicon -->

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://studio-phoenix.com/",
  "name": "Studio-Phoenix",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996551551668",
    "contactType": "Customer service"
  }
}
</script>
<!-- OPEN GRAPH -->
<meta property="og:locale" content="ru_RU">
<meta property="og:title" content="Дизайн интерьера и экстерьера. Проектирование и ремонт — Phoenix Studio" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://studio-phoenix.com/" />
<meta property="og:image" content="https://studio-phoenix.com/i/Logo.png" />
<meta property="og:description" content="Команда профессионалов поможет вам получить от ремонта максимум удовольствия, наши дизайнеры возьмут на себя все сложности разработки проектов." />
<meta property="og:site_name" content="Studio-Phoenix" />
<!-- OPEN GRAPH -->
<link rel="image_src" href="https://studio-phoenix.com/i/Logo.png">
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
<br><br>
<a href="<?=$config['sitelink']?>">
<img src="/i/Logo.webp" width="150" alt="studio-phoenix" oncontextmenu="return false;" onerror="this.onerror=null; this.src='/i/Logo.png'"/></a>
<br><small>Дизайн интерьера от Studio Phoenix</small>
</div>
<div class="tabstyle">

</div>
<div class="tabstyle">
<small>График работы<br>  
с 9.00 до 17.00<br>  
Пн-Пт </small>
</div>
<div class="tabstyle">
<small>
+996 (554) 871 717 <br>  
+996 (700) 181 015 <br> 
studio.phoenix@mail.ru <br> 
</small>
</div></div></h2>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<!--<h1><center><?=$title;?></center></h1>-->

<?=$content;?>

</article><!--/span-->

<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'Reviews', $Reviews )?>
<!--/Коментарии-->
</aside><!--/span-->

</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<footer class="container-fluid & footer-bg">
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
Более 10 лет на рынке<br>
Интерьер любой сложности<br>
Авторский надзор<br>
Ландшафтный дизайн<br>
Дизайн экстерьера<br>
Качественная 3d визуализация<br>
Ведение работы от идеи и до реализации
</div>
<div class="footer-silection-center">
<a href="https://api.whatsapp.com/send?phone=996551551668" target="_blank"><img src="i/social/Whatsapp.svg" width="25" hspace="10" alt="Whatsapp"></a> 
<a href="https://www.instagram.com/studio.phoenix/" target="_blank"><img src="i/social/insta.svg" width="25" hspace="10" alt="instagram"></a> 
<a href="https://www.facebook.com/Studio.Phoenix.Design/?eid=ARDgPm_iu1ndE8d1aU266o2fAbULh3nlOjemOAdlzy8JWub5dK_BXk2vXve__LdX2tE2qQ8Oi2V4ebyo/" target="_blank"><img src="i/social/Facebook.svg" width="25" hspace="10" alt="Facebook"></a> 
<a href="https://twitter.com/StudioPhoenix3/" target="_blank"><img src="i/social/Twitter.svg" width="25" hspace="10" alt="Twitter"></a> 
</div>
<div class="footer-silection-right">
Контакты:<br>
Адрес: г. Бишкек<br>
+996 (554) 871 717 <br>  
+996 (700) 181 015 <br> 
studio.phoenix@mail.ru<br>
<!--LiveInternet counter--><a href="//www.liveinternet.ru/click"
target="_blank"><img id="licntD345" width="88" height="31" style="border:0" 
title="LiveInternet: показано число просмотров и посетителей за 24 часа"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licntD345").src=
"//counter.yadro.ru/hit?t52.6;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(67603894, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/67603894" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</div>
</div>
<div class="footer-bottom">
<a href="https://alesunix.github.io/" target="_blank"> 
Copyright &copy; <script type="text/javascript">dt = new Date();document.write(dt.getFullYear());</script> Studio Phoenix | Designed by Alesunix </a>
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

     <link rel="stylesheet" type="text/css" href="css/style.css" />	 
	 <link rel="stylesheet" type="text/css" href="css/styleheader.css" />
	 <link rel="stylesheet" type="text/css" href="css/stylebutton.css" />
	 <link rel="stylesheet" href="css/fonts.css"> 
	 <link rel="stylesheet" href="css/menu.css">
	 <link rel="stylesheet" href="css/Slider.css"> 
	 <link rel="stylesheet" href="css/swiper.min.css">	 
	 <link rel="stylesheet" href="css/background.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>
<script src="template/bootstrap/js/bootstrap.min.js"></script>



<script type="text/javascript">
{
var isMobile = {
    Android:        function() { return navigator.userAgent.match(/Android/i) ? true : false; },
    BlackBerry:     function() { return navigator.userAgent.match(/BlackBerry/i) ? true : false; },
    iOS:            function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false; },
    Windows:        function() { return navigator.userAgent.match(/IEMobile/i) ? true : false; },
    any:            function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());  }
};
  
if ( !isMobile.any() ) {
	<!--Animated-Background-->
	document.write ('<script src="js/background.js" ></sc' + 'ript>');
	document.write ('<script src="js/TweenMax.min.js" ></sc' + 'ript>');	
	document.write ('<script src="js/easeljs-0.7.1.min.js" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/background.js" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/TweenMax.min.js"" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/easeljs-0.7.1.min.js" ></sc' + 'ript>');
}
}
</script>

<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 5,
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

</body></html>