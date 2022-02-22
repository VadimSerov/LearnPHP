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
	//private $age ;
	protected $age ; //чтобы можно было наследовать это свойство
	public function setAge($value){
		$this->age = $value ;
	}
	public function getAge(){
		return $this->age ;
	}	

}

class Programmer extends Worker {
	private $skill ;
	public function setSkill($value){
		$this->skill = $value ;
	}
	public function getSkill(){
		return $this->skill ;
	}	
}

$worker = new Programmer();
$worker->setAge(22);
$worker->setName('Костя');
$worker->setSkill('Junior');

echo $worker->getAge().' '.$worker->getName().' '.$worker->getSkill();

?>
