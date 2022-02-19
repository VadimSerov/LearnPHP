<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 24</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//глобальные переменные (области видимости)
function getSum(){
	global $vr ; //
	$vr = 34;
	return $vr ;
}

$vr = 7 ;
echo getSum().'<br>';
echo $vr .'<br><br>';

//статические переменные 
function calculator(){
	static $start = 0 ;
	return ++$start ;
}

echo calculator().'<br>';
echo calculator().'<br>';
echo calculator().'<br>';
echo calculator().'<br>';

function getArr(){
	return [2,4.1,5,11,-7] ;
}

echo getArr()[3] . '<br>' ;

?>
 </body>
</html>
