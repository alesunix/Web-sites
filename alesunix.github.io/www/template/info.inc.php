<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="w7y79Te-JGi8lnpsFJlcQvZy5Zxo1CHjJohaTJU2lS0" />
<meta name="yandex-verification" content="058d18e1faa5d134" />

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
  "@type": "Person",
  "url": "https://alesunix.github.io/",
  "name": "Алиев Ильяс Алиевич",
  "address": {
  "@type": "PostalAddress",
  "name": "Bishkek"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996559101255",
    "contactType": "Customer service"
  }
}
</script>
<!-- OPEN GRAPH -->
<meta property="og:title" content="Алиев Ильяс Алиевич | Разработчик программного обеспечения">
<meta property="og:site_name" content="Алиев_Ильяс_Алиевич">
<meta property="og:url" content="https://alesunix.github.io">
<meta property="og:description" content="Разработка программ (Windows, Web, Android, IOS) информационных систем. Верстка сайтов">
<meta property="og:type" content="website">
<meta property="og:image" content="https://alesunix.ru/i/Logo.png">
<!-- OPEN GRAPH -->
<link rel="image_src" href="https://alesunix.github.io/i/Logo.png">
<link rel="canonical" href="https://alesunix.github.io/" />
</head>
<body>
<!--Animated-Background-->
      <!--<div id="large-header" class="large-header">
         <canvas id="demo-canvas"></canvas>
      </div>
Animated-Background-->

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
<div class="langcontainer">
<a class="btn" href="" data-google-lang="ru">Ru </a>
<a class="btn" href="" data-google-lang="en">En </a>
</div>
</nav>
</header>
<!--/header-->
<!--content-->
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h2 class="muted"><?=$config['slogan']?>
<div class="headerstyle">
<div class="tabstyle"><a href="https://alesunix.github.io">
<img src="i/Logo.svg" width="290" alt="alesunix"/></a>
<br>  
<small>Software developer</small>
</div>
<div class="tabstyle">

</div>
<div class="tabstyle">
<small>Система контроля версий<br>  
Исходный код<br>  
<a href="https://github.com/alesunix" target="_blank">GitHub</a></small>
</div>
<div class="tabstyle">
<small>
alesunix@gmail.com <br>  
+996 (559) 10 12 55 <br> 
Адрес: г. Бишкек  <br> 

</small>
</div></div>
</h2>
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
<?=GetBlock($page_blocks, 'menu', $menu )?>
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
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
Самое инновационное решение сложной <br>
проблемы часто бывает самым простым. <br>
Но любой, кто посвятил свое время <br>
большим идеям, знает, что простое и легкое <br>
- это две очень разные вещи.
</div>
<div class="footer-silection-center">
<a href="https://api.whatsapp.com/send?phone=996559101255" target="_blank"><i class="fa fa-whatsapp"></i></a> 
<a href="tg://resolve?domain=@alesunix" target="_blank"><i class="fa fa-telegram"></i></a> 
<a href="mailto:alesunix@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a> 
<a href="https://www.facebook.com/alesunix" target="_blank"><i class="fa fa-facebook-official"></i></a> 
<a href="https://twitter.com/alesunix" target="_blank"><i class="fa fa-twitter"></i></a> 
<a href="https://github.com/alesunix" target="_blank"><i class="fa fa-github"></i></a>
<br><br>
<!--LiveInternet counter--><a href="//www.liveinternet.ru/click"
target="_blank"><img id="licnt9390" width="88" height="31" style="border:0"
title="LiveInternet: показано число просмотров и посетителей за 24 часа"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licnt9390").src=
"//counter.yadro.ru/hit?t54.12;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45405429-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-8');
</script>
<a href="https://webmaster.yandex.ru/siteinfo/?site=https://alesunix.github.io"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?https://alesunix.github.io&theme=dark&lang=en"/></a>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(61044529, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/61044529" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</div>
<div class="footer-silection-right">
Контакты:<br>
Адрес: г. Бишкек<br>
+996 (559) 10 12 55<br>
alesunix@gmail.com<br>
</div>
</div>
<div class="footer-bottom">
<span>Copyright &copy; <script type="text/javascript">dt = new Date();document.write(dt.getFullYear());</script> alesunix.github.io | Designed by Alesunix </span>
<br>Использование материалов без письменного согласия и ссылки на источник запрещено.
<blockquote>
<footer>Сатоши Накамото</footer><br>
<cite>White paper <i class="fa fa-bitcoin" style="font-size: 14px;color: #df8613;">itcoin</i></cite><br>
<p>Рекомендуется к прочтению всем,<br>
кто изучает принципы работы Биткойна.<p>
<a class="language-link" href="/bitcoin/bitcoin.pdf" target="_blank" style=" font-size: 12px; padding: 4px 12px 7px 24px;">English</a>
<a class="language-link" href="/bitcoin/bitcoin_ru.pdf" target="_blank" style=" font-size: 12px; padding: 4px 12px 7px 24px;">Русский</a>
</blockquote>
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

     <link rel="stylesheet" type="text/css" href="css/background.css" />
	 <link rel="stylesheet" type="text/css" href="css/Animated-Background.css" />
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
	 <link rel="stylesheet" type="text/css" href="css/blockbutton.css" />	 
	 <link rel="stylesheet" type="text/css" href="css/styleheader.css" />
	 <link rel="stylesheet" type="text/css" href="css/stylebutton.css" />	 
	 <link rel="stylesheet" href="css/fonts.css"> 
	 <link rel="stylesheet" href="css/card.css"> 	 
	 <link rel="stylesheet" href="css/about-me.css">
	 <link rel="stylesheet" href="css/swiper.min.css">
	 <link rel="stylesheet" href="css/social-card.css"> 	 
	 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="template/bootstrap/js/bootstrap.min.js"></script>
<script src="template/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>

<!-- google-translate -->
<link rel="stylesheet" href="/css/translate.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/js/google-translate.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
<!-- google-translate -->

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
    // ScrollTrigger
	document.write ('<script src="js/gsap.min.js" ></sc' + 'ript>');
	document.write ('<script src="js/ScrollTrigger.min.js" ></sc' + 'ript>');
	<!--Animated-Background-->
	document.write ('<script src="js/TweenLite.min.js" ></sc' + 'ript>');
	document.write ('<script src="js/EasePack.min.js"" ></sc' + 'ript>');
	document.write ('<script src="js/demo.js" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/TweenLite.min.js" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/EasePack.min.js"" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/demo.js" ></sc' + 'ript>');
// ScrollTrigger
if (screen.width > 1900) document.write ('<script src="js/gsap.min.js" ></sc' + 'ript>');
if (screen.width > 1900) document.write ('<script src="js/ScrollTrigger.min.js" ></sc' + 'ript>');
}
}
</script>
<script type="text/javascript"><!--ScrollTrigger-->
		gsap.timeline({
scrollTrigger: {
trigger: ".box",
start: "center center",
end: "bottom top",
markers: false,
scrub: true,
pin: true,
}
})
	.from(".text1", {y:innerHeight * 1})
	.from(".text2", {x:innerWidth * -1})
	.from(".text3", {x:innerWidth * 1})
</script>

<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper('.gallery-top', {
  spaceBetween: 10,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
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
// now add mouseover and mouse out events on '.swiper-slide' elemnts to pause and resume the autoplay;
$('.swiper-slide').on('mouseover', function() {
  swiper.autoplay.stop();
});

$('.swiper-slide').on('mouseout', function() {
  swiper.autoplay.start();
});
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 7,
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
  
<!-- Для главного слайда - эффект появления -->
  <script>
    var swiper2 = new Swiper('.swiper-slide', {
      spaceBetween: 30,
      effect: 'fade',
	  autoplay: {
      delay: 2500,
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

	
<script>
$(document).ready(function(){
			$('#button_contacts').click(function(){
				// собираем данные с формы
				var form_name 	 = $('#form_name').val();
				var form_email 	 = $('#form_email').val();
				var form_message = $('#form_message').val();
				// отправляем данные
				$.ajax({
					url: "feedback.php", // куда отправляем
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
<script>
	$(".mail-btn").on("click touchstart", function () {
    $(this).addClass("fly");
    that = this
    setTimeout(function() {
        $(that).removeClass("fly");
    }, 5400)
});
</script>
</body></html>