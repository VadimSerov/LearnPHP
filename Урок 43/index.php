<?php
// сеттеры и геттеры

class Coord{
	private $x,$y;
	public function __construct( $x = 0, $y ){
		$this->x = $x ;
		$this->y = $y ;
	}
	public function __destruct(){
		$this->x = 0 ;
		$this->y = 0 ;
		echo '<p>Объект уничтожен.</p>';
	}
	public function getX(){
		return $this->x;
	}
	public function getY(){
		return $this->y;
	}
	
}

$coord0 = new Coord(12,45);
echo '( ' . $coord0->getX() . ', ' . $coord0->getY() . ' )'.'<br>' ;
for($i=0;$i<15;$i++){
	echo 'р';
}
echo '<br>' ;


?>
