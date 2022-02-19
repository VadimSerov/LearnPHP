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
$loc->y = 15.0 ;


?>
