<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
// массивы
for ($yk=0;$yk<3;$yk++){
	$arr = array('One',"two $yk ",'Three');
	for ($i=0;$i<3;$i++){
		echo $arr[$i].'<br>';
	}
	echo '<hr>';
}
echo '<pre>';
print_r($arr);
echo '</pre>';
$arr2 = [11,'22 h',33,'eva'=>7];
echo '<pre>';
print_r($arr2);
echo '</pre>';
echo count($arr),' ',$arr[count($arr)-1] ;
array_push( $arr , 'Привет');
echo '<pre>';
print_r($arr);
echo '</pre>';

?>
 </body>
</html>
