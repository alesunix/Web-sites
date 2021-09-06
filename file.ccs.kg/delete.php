<html>
<head>
  <title>Результат удаления файлов</title>
</head>
<body>
<?php

$var = 'Файлы из хранилища успешно удалены!';
$var2 = 'Произошла ошибка при удалении файлов!';

if (file_exists('./upload'))
{
foreach (glob('./upload/*') as $file)
unlink($file); 
	echo "Файлы из хранилища успешно удалены!", print '<script>alert("'.$var.'");location.back();</script>';
}
else 
{
	echo "Произошла ошибка при удалении файлов!", print '<script>alert("'.$var2.'");location.back();</script>';
}

?>
<br>
<hr>
<br>
<a href='/secret/auth.html'><button id="button" type="button">- Вернутся в хранилище -</button></a>
</body>
</html>
