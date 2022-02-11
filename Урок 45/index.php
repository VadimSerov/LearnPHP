<?php
// ООП перезагрузка методов
class Base {
	public function stars(){
		echo 'метод родительского класса' ;
	}
}
class Second extends Base {
	public function stars(){
		parent::stars();
		echo 'метод дочернего класса';
	}
}

$obj = new Second();
$obj->stars();


?>
