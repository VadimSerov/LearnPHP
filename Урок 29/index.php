<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 29</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//кодировки utf8
$str = 'html css';
echo $str[0] . '<br>' ;
echo "\u{0404}" . '<br>' ;

echo "{$str[5]}" . '<br>' ;
$str2 = "Привет ";
echo $str2[5] . $str2[6] . '<br>' ;
echo $str2 . '<br>' ;
echo strlen($str2) . '<br>' ;
// mbstring - в файле php_ini_development раскоментировать строку extension=mbstring 
// и строку extension_dir = "ext"



?>
 </body>
</html>
