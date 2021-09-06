<html>
<head>
  <title>Ваше отправление</title>
</head>
<body>
Номер-------Область-------Населенный пункт-------Ф.И.О-------Стоимость-------Статус-------Причина   
<hr>



<?php
 $N_zakaza = $_GET['N_zakaza'];// переменная N_zakaza
  if($curl = curl_init()) //инициализация сеанса
  {    
    curl_setopt($curl, CURLOPT_URL, 'http://ccc.ddns.net/tlc/Service.asmx/Search?N_zakaza='.$N_zakaza);
	curl_setopt($curl, CURLOPT_HEADER, false); //выводим заголовки
	// Куда помещать результат выполнения запроса: 
	//  false - в стандартный поток вывода, 
	//  true - в виде возвращаемого значения функции curl_exec. 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //теперь curl вернет нам ответ, а не выведет
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);	// Максимальное время ожидания в секундах 
    $result = curl_exec($curl);	// Выполнение запроса 
    curl_close($curl);// Освобождение ресурса 	
	echo $result;// Вывести полученные данные 
  }
  else {echo "Ошибка!";}
?>

<hr>
<a href='/index.html'><button id="button" type="button">- Вернутся на главную -</button></a>
<br>
<hr>
<br>
<font color="#FF0000">Введите №_ отправления</font>
	<form action="/get.php" method="GET">
      <input type="text" name="N_zakaza" />
      <input type="submit" name="search" value="Поиск" />
    </form>
	"Вы искали"
	<?php
	 echo $N_zakaza = $_GET['N_zakaza'];
	?>
</body>
</html>
