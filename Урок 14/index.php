<?php

echo 'Парадокс вечного junior <br>' ; 
//($content = file_get_contents('some/file.txt'))||exit('Ошибка');

if ($content = file_get_contents('some/file.txt')){
	echo ' файл получен <br>';
	echo $content ;
}
else {
	echo 'не могу найти файл ' ;
}


?>
