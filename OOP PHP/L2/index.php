<?php
//инкапсуляция
class Person {
//	public $name ; обычно свойства скрывают
	private $name ;
	public function setName($value){
		$this->name = $value ;
	}
	public function getName(){
		return $this->name ;
	}	
}
$pers0 = new Person();
$pers0->setName('Чиконе');

$pers1 = new Person();
$pers1->setName('Урлания');

$pers2 = new Person();
$pers2->setName('Phars');

$pers3 = new Person();
$pers3->setName('Lurd');

echo $pers0->getName().'<br>',$pers1->getName().'<br>',$pers2->getName().'<br>',$pers3->getName().'<br>' ;

?>
