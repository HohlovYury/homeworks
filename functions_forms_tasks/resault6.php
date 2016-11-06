<?php

//проверяем MIME-тип файла
if(($_FILES['uploadfile']['type'] != 'image/jpeg')AND($_POST['submit']))
{
 echo 'Вы пытаетесь загрузить не изображение.';
 exit;
}
 if(($_FILES['uploadfile']['type'] == 'image/jpeg')AND($_POST['submit']))
{
//папка для загрузки
$uploaddir = 'gallery/';
//новое сгенерированное имя файла
$newFileName=date('YmdHis').'.jpeg';
//путь к файлу (папка.файл)
$uploadfile = $uploaddir.$newFileName;
 
//загружаем файл move_uploaded_file
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile))
 echo "Выбранный файл загружен.\n";
else
 echo "Ошибка загрузки файла.\n";
 echo '<script type="text/javascript">
window.location = "6.php"
</script>';
}

?>


     <div class="col-sm-7 blog-main">


<legend>Список картинок gallery</legend>

<div class="form-group">
<?
$dir    = 'gallery';
function list_files($dir){
$files = scandir($dir);
?>
<ol>
<?
foreach($files as $fls){
	if(($fls!=".")AND($fls!="..")) {
		echo "<li>".$fls."</li>";
		
		}
}?>
</ol>
<?
}
list_files($dir);
?>
  </div>
</div>

