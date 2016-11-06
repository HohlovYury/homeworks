<?
session_start();
if(isset($_GET['destr'])){
	session_destroy();
	?>
	 <script type="text/javascript">window.location = "8.php"</script>
	 <?
	}

//echo "<pre>";
//print_r ($_POST);
//echo "</pre>";
//echo "<hr>";

$mat = array("пизди","жопой","пизде","мудак","спиздили","остоебенило!","Хуй","ебет","жопу","отъебут","ебут","пизду","педерастами","пиздык","хуяк","пизда" );
$antimat =".......";
if(($_POST['name'])AND($_POST['messeg'])){
$_SESSION['comment'][] = $_POST;
}
else{
	echo "<p class=\"alert\">заполните поля отмеченные *</p>";
}

$count_mat = count($count_mat = array_intersect (explode(" ", $_POST['messeg']), $mat));
if($count_mat>=1){
	
echo "<p class=\"alert\">Некорректный комментарий*</p>";	
};
//print_r (count($count_mat = array_intersect (explode(" ", $_POST['messeg']), $mat)));
//print_r ($count_mat = array_intersect (explode(" ", $_POST['messeg']), $mat));

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







?>	
		
<? 			if(count($_SESSION['comment'])!=0){?>
<h3 class="center">Комментарии</h3>
	<div id="resault" class="resault">
		
			
			<?

			echo "<ol>";
			foreach($_SESSION['comment'] as $val=>$kay)
			{



			
$mess_cens = str_replace($mat, "<i style=\"color:RED;\">[цензура]</i>", $_SESSION['comment'][$val]['messeg']);
$mess_cens = strip_tags($mess_cens, '<b><i>');
	
				echo "<li>";
				echo 	"<b>".$_SESSION['comment'][$val]['name']."</b><br>";
				echo 	$mess_cens."<hr>";
				echo "</li>";			
			}
				echo "</ol>";

		?>
</div>
<?}else{echo "<b>Комментарии отсутствуют</b>";}?>