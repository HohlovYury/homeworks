<?
session_start();
if(isset($_GET['destr'])){
	session_destroy();
	?>
	 <script type="text/javascript">window.location = "9.php"</script>
	 <?
	}


if($_POST['messeg']){
$_SESSION['comment'][] = $_POST;
}
else{
	echo "<p class=\"alert\">заполните поля отмеченные *</p>";
}


?>
<div class=" resault_full">

<div class="count">	
Всего:
<? echo $count_us = count($_SESSION['comment']);?>
 комментариев.
</div>

<div class="clear">		<a href="?destr=1">очистить</a>		</div>

</div>
<div class="resault_full">

	
		
<?



echo (strrev($_POST['messeg']));

	if(count($_SESSION['comment'])!=0){?>
<h3 class="center">перевернуто</h3>
	<div id="resault" class="resault">
		
			
			<?

			echo "<ol>";
			foreach($_SESSION['comment'] as $val=>$kay)
			{	
	
				echo "<li>";
				echo 	strrev($kay['messeg'])."<hr>";
				echo "</li>";			
			}
				echo "</ol>";

		?>
</div>
<?}else{echo "<b>Комментарии отсутствуют</b>";}?>