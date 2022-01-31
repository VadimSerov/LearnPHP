<?php
echo 'это файл index'.'<br>';
require_once 'utilits/second.php' ;
//константы класса

class ConstantClass {
	const NAME = 'const' ;
}

//echo ConstantClass::NAME .'<br>'; 

if (defined('ConstantClass::NAME')){
	echo ' Константа определена ';
}
else {
		echo ' Константа не определена ';
}
echo '<br>' ;

?>
