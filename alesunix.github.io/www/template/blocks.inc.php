<?php
# Дополнительные блоки данных
# Добавляйте сколько угодно. Не забудьте вставить переменную в design.inc.php или на страницу в папке content/

$menu = <<<menu


menu;

$newsblock = <<<newsblock
<section class="portfolio-container">
				<ul class="portfolio-items">
					<li class="img_item">
						<div class="caption14">
							<h3>Обо мне</h3>
							<p>Здесь Вы ознакомитесь с более подробной информацией обо мне.</p>
							<a href="index.html#about_me" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/about_me.webp" alt="Обо мне" oncontextmenu="return false;" onerror="this.onerror=null; this.src='i/about_me.png'"/>
					</li>
					<li class="img_item">
						<div class="caption14">
							<h3>Отзывы</h3>
							<p>Здесь Вы можете оставлять свои отзывы и комментарии.</p>
							<a href="https://twitter.com/alesunix" class="pcv_button gray" target="_blank">Подробнее</a>
						</div>
						<img src="i/Reviews.webp" alt="Отзывы" oncontextmenu="return false;" onerror="this.onerror=null; this.src='i/Reviews.png'"/>
					</li>
					<li class="img_item">
						<div class="caption14">
							<h3>Блог</h3>
							<p>Здесь я делюсь своими заметками на самые разные темы.</p>
							<a href="Blog.html" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/blog.webp" alt="Блог" oncontextmenu="return false;" onerror="this.onerror=null; this.src='i/blog.png'"/>
					</li>
					<li class="img_item">
						<div class="caption14">
							<h3>Портфолио</h3>
							<p>Здесь я выкладываю готовые работы моих проектов.</p>
							<a href="index.html#portfo" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/portfolio.webp" alt="Портфолио" oncontextmenu="return false;" onerror="this.onerror=null; this.src='i/portfolio.png'"/>
					</li>
				</ul><!-- Конец .portfolio-items -->
			</section><!-- Конец .portfolio-container -->
			<div class="clear"></div>
newsblock;



