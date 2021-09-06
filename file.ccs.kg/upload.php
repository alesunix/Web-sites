<html>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php
// проверяем, что есть файл
if((!empty($_FILES["filename"])) && ($_FILES['filename']['error'] == 0)) {
  // проверяем, что файл это приложение xlsx и его размер не больше 350кб
  $filename = basename($_FILES['filename']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "xlsx") && ($_FILES["filename"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") && 
    ($_FILES["filename"]["size"] < 35000000000)) {
    // путь для сохранения файла
      $newname = dirname(__FILE__).'/upload/'.$filename;
      // проверяем, файл с таким названием уже есть на сервере
      if (!file_exists($newname)) {
        // переместить загруженный файл в новое место
        if ((move_uploaded_file($_FILES['filename']['tmp_name'],$newname))) {
           echo "Файл был успешно загружен: ".$newname;
        } else {
           echo "Произошла ошибка при загрузке файла!";
        }
      } else {
         echo "Ошибка: файл ".$_FILES["filename"]["name"]." уже существует";
      }
  } else {
     echo "Ошибка при загрузке файла, приложение не .xlsx или больше чем 350кб.";
  }
} else {
 echo "Ошибка: файл не загружен!";
}
?>
<br>
<hr>
<br>
<a href='/client/upload.html'><button id="button" type="button">- Загрузить следующий файл -</button></a>
<br><hr>
<a href='/index.html'><button id="button" type="button">- Вернутся на главную -</button></a>
</body>
</html>