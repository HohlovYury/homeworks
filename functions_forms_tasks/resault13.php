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
<h3 class="center">списка в порядке уменьшения</h3>
	<div id="resault" class="resault">
<?
$arr_ex=explode(" ", $_POST['messeg']);
echo "<pre>";
//print_r($arr_ex);
$arr_coubt_val =array_count_values ($arr_ex);
arsort($arr_coubt_val);
reset($arr_coubt_val);
print_r ($arr_coubt_val);
//print_r (array_count_values ($arr_coubt_val));

echo "</pre>";
//echo implode(".",(array_reverse($arr_count_v)));
?>
</div>
</div>
<?}else{echo "<b>Комментарии отсутствуют</b>";}?>