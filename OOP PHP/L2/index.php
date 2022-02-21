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

class City {
	private $name ;
	private $people = [] ;
	public function setName($value){
		$this->name = $value ;
	}
	public function getName(){
		return $this->name ;
	}	
	public function addPerson(Person $person){
		$this->people[] = $person; 
	}
	public function getPeople(){
		$result = '' ;
		foreach ($this->people as $person){
			$result .= $person->getName().' ' ;
		}
		return $result ;
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
echo '<hr>' ;

$moscow = new City();
$moscow->setName('Moscow');
echo $moscow->getName().'<br>' ;

$moscow->addPerson($pers0);
$moscow->addPerson($pers1);
$moscow->addPerson($pers2);
$moscow->addPerson($pers3);
echo $moscow->getPeople() ;


?>
