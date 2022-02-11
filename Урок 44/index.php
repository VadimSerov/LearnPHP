<?php
// ООП наследование

// класс Люди
class Base {
	public $one;
	protected $text;
	public function printer(){
		echo $this->one ;
	}
}

// потомки класса :
class NewClass extends Base {
	public $two ;
	public function by(){
		echo $this->two ;
	} 
	public function exc(){
		return $parent->text;
	}
}
// мальчики
// девочки 

$obj = new NewClass ;
$obj->one = 'Andrey' ;
$obj->two = 'Cry' ;
$obj->text = 'текст';

$obj->printer();
echo '<br>' ;
$obj->by();
echo '<br>';
echo $obj->exc();
echo '<br>';


?>
