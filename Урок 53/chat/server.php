<?PHP
//echo "сервер";
define('PORT',"8090");
require_once("classes/chat.php");
$chat = new Chat();
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($socket, SOL_SOCKET,SO_REUSEADDR,1);
socket_bind($socket,0,PORT);
socket_listen($socket);
while(true){
	$newSocket = socket_accept($socket);
	$header = socket_read($newSocket,1024);
	$chat->sendHeaders($header,$newSocket,'localhost/chat',PORT);
	
}
socket_close($socket);

?>
