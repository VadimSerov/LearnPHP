<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 31</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
$str = 'Имя, Фамилия,  email,mobile';
$newArr = explode(',',$str);
echo "<pre>";
print_r($newArr);
echo "</pre>";

$newStr = implode(';',$newArr);
echo "<pre>";
echo $newStr ;
echo "</pre>";

//сериализация
$num = [11,2323,423,534,54] ;
$str1 = serialize($num);
echo $str1 . '<br>' ;
$arr = unserialize($str1);
var_dump($arr);

//json

?>
 </body>
</html>
