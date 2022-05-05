<?PHP
//echo "сервер";
require_once("classes/chat.php");
$chat = new Chat();
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($socket, SOL_SOCKET);


?>