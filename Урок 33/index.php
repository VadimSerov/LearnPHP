<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 33</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//передача параметров методом get
// http://localhost:4000/?name=andrei&age=37
echo $_GET['name'].'<br>';
echo $_GET['age'];

echo "<a href='test.php?text=".urlencode('Привеет php!')."' target='_blank'>ссылка</a>";


?>
 </body>
</html>
