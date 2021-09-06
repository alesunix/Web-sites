<?php
{
# Данные о странице
$title = 'Контакты';
$keywords = 'Контакты';
$description = 'Контакты ОсОО «Айдан-экспресс»';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<div class='well'>
<img src="/i/contact.png" width=400" alt="контакты">



<h5>
г.Бишкек Ул. Рижская, 20<br>
<br>
<a href="/index.html#feedback">E-mail: aidan-express@mail.ru</a>
<br>
Телефон:<br>
(0553) 00-61-61 <br>
(0555) 33-31-03<br>
(0557) 55-66-55<br>

</h5>


<hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d434.5110453013504!2d74.55788268879277!3d42.89330866079647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec7d820a35c2d%3A0xf352405a458d5ee9!2zMjAg0KDQuNC20YHQutCw0Y8sINCR0LjRiNC60LXQug!5e0!3m2!1sru!2skg!4v1616032839136!5m2!1sru!2skg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>




<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>




</div class='well'>
EOF;
}