<?php
class Programmer extends Worker {
	private $skill ;
	public function setSkill($value){
		$this->skill = $value ;
	}
	public function getSkill(){
		return $this->skill ;
	}	
}
?>
