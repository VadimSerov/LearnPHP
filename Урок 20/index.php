<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 20</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//массивы и циклы
$arr = [1,2,3];
list($one,$two,$three) = $arr ;
echo $two . '<br>';

for ($i=0;$i<count($arr);$i++){
	echo $arr[$i].' ';
}
echo '<br>';

$andrei = [
	'name' => 'Андрей',
	'age' => 31,
	'weigth' => 73
];
foreach ($andrei as $key => $value ){
	echo $key.' '.$value.'<br>' ;
}
foreach ($andrei as $val ){
	echo $val.'<br>' ;
}
foreach ($arr as $key => $value ){
	echo $key.' '.$value.'<br>' ;
}

?>
 </body>
</html>
