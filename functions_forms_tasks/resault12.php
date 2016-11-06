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
<h3 class="center">перевернуто</h3>
	<div id="resault" class="resault">
<?
$arr_exp=explode(". ", $_POST['messeg']);
$arr_exp=array_reverse($arr_exp);

echo "<pre>";
print_r ($arr_exp);
echo "</pre>";
?>
</div>
</div>
<?}else{echo "<b>Комментарии отсутствуют</b>";}?>