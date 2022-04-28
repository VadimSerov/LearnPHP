<?PHP
//
$x=$_POST["num1"];
$y=$_POST["num2"];
if(is_numeric($x)&&is_numeric($y)){
	echo $x+$y;
} else {
	echo "";
}

?>
