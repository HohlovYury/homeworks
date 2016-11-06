<?
session_start();
if(isset($_GET['destr'])){
	session_destroy();
	?>
	 <script type="text/javascript">window.location = "7.php"</script>
	 <?
	}

//echo "<pre>";
//print_r ($_POST);
//echo "</pre>";
//echo "<hr>";

if(($_POST['name'])AND($_POST['messeg'])){
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

	
		
<? 			if(count($_SESSION['comment'])!=0){?>
<h3 class="center">Комментарии</h3>
	<div id="resault" class="resault">
		
			
			<?

			echo "<ol>";
			foreach($_SESSION['comment'] as $val=>$kay)
			{				
				echo "<li>";
				echo 	"<b>".$_SESSION['comment'][$val]['name']."</b><br>";
				echo 	$_SESSION['comment'][$val]['tema']."<br>";
				echo 	$_SESSION['comment'][$val]['messeg']."<hr>";
				echo "</li>";			
			}
				echo "</ol>";
			
		//echo "<pre>";
		//print_r ($_SESSION['comment']);
		//echo "</pre>";
		?>
</div>
<?}else{echo "<b>Комментарии отсутствуют</b>";}?>