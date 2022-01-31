<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 22</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//функции
function myFun($num1, $num2){
	return $num1+$num2 ;
}
echo myFun(3.5,12).'<br>';
$a=34;
$b=4;
echo myFun($a,$b).'<br>';

?>
 </body>
</html>
