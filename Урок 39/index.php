<?php
//Дерево документа
echo $_SERVER['DOCUMENT_ROOT'].'<br>' ;
//Некие параметры относительно типов документа
echo $_SERVER['HTTP_ACCEPT'].'<br>' ;
//Предпочтения клиента по языку
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>' ;
//Получение хоста
echo $_SERVER['HTTP_HOST'].'<br>' ;
//Адрес и страница откуда перешел полльзователь
echo $_SERVER['HTTP_REFERER'].'<br>' ;
//тип браузера и ОС
echo $_SERVER['HTTP_USER_AGENT'].'<br>';
// IP адрес клиента
echo $_SERVER['REMOTE_ADDR'].'<br>';
//file исходный скрипт
echo $_SERVER['SCRIPT_FILENAME'].'<br>';
//имя сервера для независимых ссылок
echo $_SERVER['SERVER_NAME'].'<br>';
//метод запроса
echo $_SERVER['REQUEST_METHOD'].'<br>';
//строка запроса
echo $_SERVER['QUERY_STRING'].'<br>';
//запрос  включая параметры
echo $_SERVER['REQUEST_URI'].'<hr>';

$file_name = '"'.$_SERVER['DOCUMENT_ROOT'].'\form.html"';
$getcontent = file_get_contents("..\README.md");

echo"<textarea>";
print_r($getcontent);
echo"</textarea>";

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo '<a href="http://'.$_SERVER["HTTP_HOST"].'/form.html" target="_blank">форма</a>' ;




?>
