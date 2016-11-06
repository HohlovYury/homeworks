<?


if($_POST['messeg']){
$_SESSION['comment'][] = $_POST;
}
else{
	echo "<p class=\"alert\">заполните поля отмеченные *</p>";
}


?>
<div class=" resault_full">
		
<?

	if($_POST['messeg']){?>
<h3 class="center">уникальных слов в тексте</h3>
	<div id="resault" class="resault">
<?
$arr_count_v=explode(". ", $_POST['messeg']);

foreach ($arr_count_v as $val=>$key){
	

// преобразовываем функцией mb_convert_case
$cob_c =  mb_convert_case($key, MB_CASE_TITLE, 'UTF-8');	
echo $cob_c .= ".";

};


		?>
</div>
</div>
<?}else{echo "<b>Комментарии отсутствуют</b>";}?>