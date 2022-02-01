<?php
// ООП - методы
class Family {
	private $boy, $girl;
	
	public function setNameBoy($boy){
		$this->boy = $boy ;
	}
	public function setNameGirl($girl){
		$this->girl = $girl ;
	}
	public function getNameBoy(){
		return $this->boy ;
	}
	public function getNameGirl(){
		return $this->girl ;
	}
	/*дизайн функция*/
	public function love(){
		return $this->getNameGirl() . ' + ' . $this->getNameBoy() . ' = Любовь ' ;
	}
}
/**/
class Hi{
	public static function hello(){
		return 'Привет друзья!' ;
	}
	public function bye(){
		return 'Всем пока!';
	}
}

$family = new Family ;
$family->setNameBoy('Костя');
$family->setNameGirl('Валя');

echo $family->love() . '<br>';

/*прямое обращение к статическим методам без создания обьекта*/
echo Hi::hello() . '<br>' ;

/*ключевое слово self*/
// более прилично собрать все классы в отдельный модуль
class Page{
	static $main = 'content<br>' ;
	public static function head(){
		return 'header<br>';
	}
	public static function footer(){
		return 'footer<br>' ;
	}
	public static function getPage(){
		/*так нельзя*/
		//echo self::head() . self::$main . self::footer() ;
		return self::head() . self::$main . self::footer() ;
	}
	
}

echo Page::getPage();

?>
