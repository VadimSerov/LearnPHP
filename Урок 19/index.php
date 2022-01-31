<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 19</title>
  <meta charset="utf-8">
 </head>
 <body>
<?
//многомерные массивы
$arr = ['name' => 'Вадим', 'age' => 57 ] ;
$arr2 = ['Вадим',57];

echo '<pre>';
print_r($arr);
print_r($arr2);
echo '</pre>';

$people = [
'Vadim' => ['name' => 'Серов Вадим Владимирович','age'=>57,'weight'=>96],
'Ivan' => ['name' => 'Греф Иван Александрович','age'=>47,'weight'=>86],
'Oleg' => ['name' => 'Рюриков Олег Игоревич','age'=>37,'weight'=>76],
'Nika' => ['name' => 'Штар Вероника Альфредовна','age'=>47,'weight'=>66]
];

echo '<pre>';
print_r($people);
echo '</pre>';
echo $people['Oleg']['age'],'<br>';

$arrs= ['time'=>10];
echo "Сейчас у нас $arrs[time] утра. <br>";
echo "Олег весит {$people['Oleg']['weight']} кг. <br> ";

?>
 </body>
</html>
