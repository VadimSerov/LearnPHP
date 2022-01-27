<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';

if(move_uploaded_file($_FILES['filename']['tmp_name'],'tmp/'.$_FILES['filename']['name'])){
	echo 'Файл скопирован на сервер';
}else{
	echo 'Файл  НЕ скопирован на сервер';
}

?>
