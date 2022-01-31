<?php
session_start();
echo 'Сессии';
$_SESSION['name'] = 'Vadim';
$_SESSION['arr'] = [1,2,'y',3,34];

echo '<pre>' ;
print_r($_SESSION);
echo '</pre>';

//удаление
unset($_SESSION['arr'][2]);

echo '<pre>' ;
print_r($_SESSION);
echo '</pre>';


//Опустошение
//$_SESSION = [];
//session_destroy();

echo '<pre>' ;
print_r($_SESSION);
echo '</pre>';
/* зачистка куки 
if(ini_get('session.use.cookies')){
	$params = session_get_cookie_params();
	setcookie(session_name(),'',time()-42000,
		$params['path'],$params[''],
		$params['secure'],$params['httponly']
	);
}
*/
?>
