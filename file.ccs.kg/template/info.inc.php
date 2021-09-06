<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="m16yXNLNA45nHR2RDE6DU0uOalOuNi_QPvmx1nnfPaE" />
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
<img src="<?=$config['sitelink']?>i/gerb.png" alt="kg" class="pull-left" style="height:40px;">
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><span class="text-info">&nbsp;<?=$config['sitename']?></span></a>
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
<h3 class="muted"><?=$config['slogan']?></h3>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<h1><?=$title;?></h1>
<?=$content;?>
</article><!--/span-->

<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'donate', $donate )?>
<!--/Коментарии-->
<b><font color='red'>Denwer</b></font>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
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
</body></html>