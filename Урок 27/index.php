<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 27</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//Замыкания применяются только к анонимным функциям
$mess = 'Это текст до момента создания функции ' ;

$test = function (array $some) use ($mess) {
	if (isset($some) && count($some)>0) {
		echo $mess . '<br>' ;
		foreach ($some as $li) {
			echo $li . '<br>' ;
		}
	}
};

$test([]);
$some = ['новый текст'];
$test($some);
//изменение окружения
$mess = 'измененный текст (окружения)';
$some = [10,20,30,40] ;
$test($some) ;




?>
 </body>
</html>
