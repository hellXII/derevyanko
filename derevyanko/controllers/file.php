<?php
	if(isset($_FILES)) {
		$uploadDir = "/files";
		for($i = 0; $i < count($_FILES['file']); $i++) { 
			$uploadFile[$i] = $uploadDir.basename($_FILES['file'][$i]);
			$fileChecked[$i] = false;
			echo $_FILES['file'][$i].$_FILES['file'][$i];
		}
		if(move_uploaded_file($_FILES['file']['/files'][$i], $uploadFile[$i])) {
			echo "Успешно загружен <br>";
		}
		else {
			echo "Ошибка ".$_FILES['file']['error'][$i]."<br>";
		}
	}
		
	else {
		echo "Вы не прислали файл!" ;
	}
?>