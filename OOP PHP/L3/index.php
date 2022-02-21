<?php
//Наследование
class Person {
//	public $name ; обычно свойства скрывают
//	private $name ; 
	protected $name ; // чтобы удобнее использовать в классе наследнике
	public function setName($value){
		$this->name = $value ;
	}
	public function getName(){
		return $this->name ;
	}	
}

class Worker extends Person {
	private $age ;
	public function setAge($value){
		$this->age = $value ;
	}
	public function getAge(){
		return $this->age ;
	}	

}

$worker = new Worker();
$worker->setAge(22);
$worker->setName('Костя');

echo $worker->getAge().' '.$worker->getName() ;

?>
