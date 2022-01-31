<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 21</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//слияние массивов
$arr0 = ['free','mybe','p'=>'text1'];
$arr1 = ['my', 'text'];
$arr2 = [2=>'our',3=>'some','p'=>'text2'];

$concat = $arr1 + $arr2;

echo '<pre>';
print_r($concat);
echo '</pre>';

$concat2 = array_merge($arr1,$arr0,$arr2);

echo '<pre>';
print_r($concat2);
echo '</pre>';

$a = [1,3,'6',8,12,8,2.3] ;

//сравнение массивов
for ($i=0;$i<10;$i++){
	if(isset($a[$i])){
		echo "Элемент массива \$a[$i] существует.<br>";
	}else{
		echo "Элемент массива \$a[$i] не существует.<br>";
	}
}
if(in_array(8,$a)){
	echo "цифра 8 существует в массиве.<br>";
}else{
	echo "цифра 8 не существует в массиве.<br>";
}

if(in_array(6,$a)){
	echo "цифра 6 существует в массиве.<br>";
}else{
	echo "цифра 6 не существует в массиве.<br>";
}

if(in_array(6,$a,true)){
	echo "цифра 6 существует в массиве.<br>";
}else{
	echo "цифра 6 не существует в массиве.<br>";
}


?>
 </body>
</html>
