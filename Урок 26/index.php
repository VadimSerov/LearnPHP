<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 26</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//вложенные функции
function box(){
	function inn(){
		echo "test<br>";
	}
}

//inn();

// динамическое имя функции
function hello(){
	return 'Hello' ;
}
$var = "hello"; //если переменная содержит строку имя функции то эту переменную можно использовать как функцию  
echo $var() .'<br>';

// анонимные функции
$some = function(...$arr){
	foreach($arr as $vel){
		echo $vel . '<br>' ;
	}
} ;

$some(12,34,44,5657);

?>
 </body>
</html>
