<?php
#script start
# Ограничение доступа
if (!CheckLogin($config['access_login'], $config['access_password']))
	die('Доступ запрещён.');
#script end

# Данные о странице
$title = 'Хранилище';
$keywords = '';
$description = '';
$template = 'info';
$page_blocks = 'donate';

# Содержание страницы

$content = <<<EOF
<hr>
После того как скачаете все файлы, необходимо очистить хранилище!

EOF;
//Отображение списка
$dir  = 'upload';
$files = scandir($dir);
foreach ($files as $key => $value) {
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/upload/'.$value.'">'.$value.'</a> <br/>';
}
?>

