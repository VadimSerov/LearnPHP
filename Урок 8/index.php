<?php
//require_once - подключает внешний файл только один раз
//классы и объекты
require_once 'SomePeople.php';

/*class SomePeople {
// public private protected - спецификаторы доступа
	public $age;
	public $name;	
}
*/

$nick = new SomePeople();
// unset $nick - удаление объекта 
$nick->age = 30;
$nick->name = "Nick";

echo ' шта how '.$nick->name ;

$loc = new Location ;
$loc->x = 22.23 ;
//$loc->y = 15.0 ;

echo "<br>".SomePeople::$people . '<br>' ;

$tim = new SomePeople ;
$tim->age = 33 ; 

$tom = clone $tim ;
$tom->age = 44 ;

echo $tom->age . '<br>' ;
echo $tim->age . '<br>';

//константа
define('PI',3.1415926);

echo PI . '<br>';

$PI = 45 ;

echo $PI . '<br>' ;

if (defined('PI')) {
	echo 'PI определена' ;
}
else {
	echo 'PI не определена ' ;
}
/*
__LINE__
__FILE__
__FUNCTION__
__CLASS__
__METHOD__
__DIR__
PHP_VERSION
OS_VERSION
PHP_EOL

*/
echo '<br>'.PHP_VERSION.' ';
echo __DIR__ ;

?>
