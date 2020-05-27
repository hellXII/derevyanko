<?php

	require($_SERVER["DOCUMENT_ROOT"]."/models/db.php");

?>
<form method='post' action="/controllers/file.php" enctype="multipart/form-data">
<input type='file' name='file[]' id='file-drop' multiple required><br>
<input type='submit' value='Загрузить' >
</form>