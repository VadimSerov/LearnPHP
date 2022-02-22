<?php
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
?>
