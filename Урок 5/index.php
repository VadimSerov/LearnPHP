<?php

$str = "some text";
$num = 123.1;
$nid ="";
//echo isset($str0);

// если нет переменной, пустая строка, строка "0", null, false - выдаёт true; 
//echo empty($str);
if (isset($str)){
	echo "переменная $str существует"."<br>";
}

if (empty($nid)) {
	echo 'переменная $nid пустая  '.'<br>';
}

//определяем тип переменной

echo gettype($num) ;

?>
