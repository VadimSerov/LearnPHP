<?php
if(empty($_POST['name']) or empty($_POST['age'])){
	echo 'Нигил';
}else{
	echo $_POST['name'].'<br>'.$_POST['age'].'<br>';
}
?>