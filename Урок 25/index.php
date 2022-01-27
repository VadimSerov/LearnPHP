<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 25</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//рекурсии
function recu($num){
	//если параметр < 10 продолжаем рекурсию
	if($num<=10){
		echo $num++ . '<br>';
		recu($num);
	} else
		return ;
}

//recu(3);

function factorial(int $n):int{
	if($n<=1){
		return 1;
	} else {
		return $n--*factorial($n);
	}
}

echo factorial(11);

?>
 </body>
</html>
