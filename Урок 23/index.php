<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 23</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//функции 2
//function getResult1($var){ //параметр по значению
//	$var = $var * 2 ;
//	return $var ;
//}

function getResult(&$var){// параметр по ссылке
	$var = $var * 2 ;
	return $var ;
}


$new = 10 ;
echo getResult($new).'<br>' ;
echo $new . '<br>';

//необязательные параметры

function getResult2($var1=2,$var2=3){// параметр по ссылке
	$var = $var1 * $var2 ;
	return $var ;
}

echo getResult2().'<br>' ;
echo getResult2($new,5).'<br>' ;
echo getResult2($new).'<br>' ;

//изменяемое количество параметров
function myList(...$items){
	foreach ($items as $v){
		echo $v . '<br>' ;
	}
}
//myList('Один','Гуннар','Локи','Тор');

$some = ['PHP','Python','JavaScript','HTML','CSS'] ;

//myList(...$some);
myList('Один','Гуннар',...$some);

?>
 </body>
</html>
