<?php
// сеттеры и геттеры методы акцессоры __set и __get

class Acc {
	private $one = [] ;
	
	public function __get($key){
		if(array_key_exists($key, $this->one)){
			return $this->one[$key] ;
		}else{
			return null ;
		}	
	}
	
	public function __set($key,$value){
		$this->one[$key] = $value ;
	}
	
}

class MyGroup {
	public $name, $age, $gender ;
	
	public function __construct($name, $age=18, $gender){
		$this->name = $name ;
		$this->age = $age ;
		$this->gender = $gender ;		
	}
	public function __get($key){
		return $this->$key ;
	}
}

$obj = new Acc() ;

$obj->text = 'просто текст ' ;
$obj->name = 'Андрей' ;
echo $obj->text . '<br>' ;

echo '<pre>' ;
print_r($obj);
echo '</pre>' ;

?>
