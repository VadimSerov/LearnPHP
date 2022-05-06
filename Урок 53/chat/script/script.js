$(document).ready(function(){
	function message(text){
		chat_result.innerHTML += "<div>"+text+"</div>" ;
	}
	var socket = new WebSocket("ws://localhost:8090/chat/server.php");
	socket.onopen = function(){
		message("соединение установлено");
	}
	
	socket.onerror=function(error){
		message("ошибка "+(error.message?error.message:""));
	}
	
	socket.onclose =function(){
		message("соединение закрыто");
	}
	
	socket.onmessage = function(){
		var data = JSON.parse(event.data);
		message(data.type+" - "+data.message );
	}
	
});