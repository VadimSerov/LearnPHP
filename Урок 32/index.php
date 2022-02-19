<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 32</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//сериализация
//json
$arr = [
	'fio'=> 'Иванов Степан',
	'age'=> '33',
	'vk_url'=>'https://vk.com/id1111111',
	'learn'=> ['HTML','CSS','PHP']
];

echo json_encode($arr /*, JSON_UNESCAPED_UNICODE*/ );
$json = '{"people":"Сидоров Никита","adres":"Ленина 23б","mob":["09331122","+71334926813"]}' ;
$arr2 = json_decode($json /*, true*/ );

echo '<pre>';
print_r($arr2);
echo '</pre>';

?>
 </body>
</html>
