
<?php
//Работа с HTML

$str = "
<!DOCTYPE html>
<html lang=\"ru\">
 <head>
  <title>внешняя форма</title>
  <meta charset=\"utf-8\">
 </head>
 <body>
	<form action='form.php' method='post'>
		Оставте сообщение <br>
		<textarea cols=50 rows=5 name='msg'>
		</textarea><br>
		<input type='submit' value='Отправить'>
	</form>
 
<script>
</script>
 </body>
</html>

" ;

echo $str ;

?>
 