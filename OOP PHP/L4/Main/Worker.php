<?php
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
?>
