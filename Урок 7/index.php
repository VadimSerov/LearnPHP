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

echo "<br>".SomePeople::$people ;

$tim = new SomePeople ;
$tim->age = 33 ; 

$bob = $tim ; // это не два объекта а один и тот же
$tim->age = 44;
echo '<br>' ;
echo $tim->age.'<br>' ; 
echo $bob->age ;

?>
