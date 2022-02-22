<?php
// пространство имён (namespace)

require 'Main/Person.php' ;
require 'Main/Worker.php' ;
require 'Main/Programmer.php' ;

$worker = new Programmer();
$worker->setAge(22);
$worker->setName('Костя');
$worker->setSkill('Junior');

echo $worker->getAge().' '.$worker->getName().' '.$worker->getSkill();

?>
