<?php
// ООП - методы
class Hi {
	public function hello(){
		return "Привет ";
	}
	public function by(){
		return "Пока ";
	}
}

/*class Family {
	private $boy;
	private $girl;
	public function setNameBoy($boy){
		$this->boy = $boy;
	}
	public function setNameGirl($girl){
		$this->girl = $girl;
	}
}*/

class Job extends Person{//обретение родительского класса
	//константы
	const COMPANY = 'Тюменский Государственный Университет' ;

	//public $jobName;
	private $jobName;

	public function __construct($name,$lastName,$gender,$jobName){
		$this->jobName = $jobName;
		//родительский конструктор
		parent::__construct($name,$lastName,$gender	);
	}
	// обращение к имени работы 
	public function getJobName(){
		return $this->jobName;
	}
	//задание имени работы
	public function setJobName($jobName){
		$this->jobName = $jobName;
	}
	//дизайн функция обращение к имя и профессия
	public function personData(){
		//если константа определена в предковом классе испльзуем parent
		//если константа определена в этом классе используем self
		return 'имя : ' . $this->name . ', резидент : ' . parent::RESIDENT . ', профессия : ' . $this->jobName . ', в компании : ' . self::COMPANY ;
	}
	
}

/**/
class Person {
	const RESIDENT = 'Russia';

	//public $name; //опасно изменяется напрямую
	//private $name ; // не передается в класс потомка
	protected $name ,
			 $lastName ,
			 $gender;

	// обобщенный геттер
	public function __set($varName,$value){
		$this->$varName = $value ;
	}
	// обобщенный сеттер
	public function __get($varName){
		return $this->$varName ;
	}
	public function __construct($name,$lastName,$gender	){
		$this->name = $name;
		$this->lastName = $lastName;
	    $this->gender = $gender;		
	}

	public function personInfo(){
		return 'Имя: ' . $this->name . ', Фамилия: ' . $this->lastName . ', пол: ' . $this->gender ;
	}
	
	
}

$obj = new Hi;
//var_dump($obj);
echo $obj->hello(),'<br>';
echo $obj->by(),'<br>';
/**/
$alex = new Person('Alex','Bondar','male');
$tim = new Person('Вадим','Серов','male');
/**/
echo $alex->lastName,'<br>';
echo $tim->personInfo(),'<br>';
/**/
$alex = new Job('Alex','Bondar','male','Scientist');
echo $alex->personInfo(),'<br>';
echo $alex->getJobName(),'<br>';

$alex->setJobName('Programmer');
echo 'new job : '.$alex->personData(),'<br>';
//echo Job::COMPANY . '<br>' ;
//константа наследуется от предкового класса
echo Job::RESIDENT . '<br>';


?>
