<?
session_start();
if($_GET['destr']==1){session_destroy();}else{}

//echo "<pre>";
//print_r ($_GET);
//echo "</pre>";
//echo "<hr>";

if(($_GET['name'])AND($_GET['count'])AND($_GET['price'])AND($_GET['seance'])AND($_GET['fone'])){
$_SESSION['user'][] = $_GET;
}
else{
	echo "<p class=\"alert\">заполните поля отмеченные *</p>";
}


?>
<div class=" resault_full">

<div class="count">	
Всего:
<? echo $count_us = count($_SESSION['user']);?>
 записей
</div>
<div class="clear">		<a href="?destr=1">очистить</a>		</div>

</div>
<div class="resault_full">

	
		

<h3 class="center">Список</h3>
	<div id="resault" class="resault">
		
			<? 
			if($count_us>0){
			echo "<ol>";
			foreach($_SESSION['user'] as $volue=>$kay )
			{
				
				echo "<li>";
				echo "<h4 class=\"name\">".$_SESSION['user'][$volue]['name']."</h4>";
				echo "<p class=\"seance\">Cеанc: ".$_SESSION['user'][$volue]['seance']."</p>";	
				echo "<p class=\"count\">Взрослых: ".$_SESSION['user'][$volue]['count']."шт</p>";
				
				echo "<p class=\"count\">Детских: ".$_SESSION['user'][$volue]['count_child']."шт</p>";
$sum_adult = $_SESSION['user'][$volue]['count']* $_SESSION['user'][$volue]['price'];		
$sum_child = $_SESSION['user'][$volue]['count_child'] * ($_SESSION['user'][$volue]['price']/2);

echo "<p class=\"cumm\">оплачено: ";
echo $sum_full = $sum_adult + $sum_child."грн";
echo "</p>";
echo "<p class=\"manager\">Заказ принял: ".$_SESSION['user'][$volue]['manager'];
echo "<br>";
echo "<p class=\"massege\">Примечание: ".$_SESSION['user'][$volue]['masseg']."</p>";


				echo "</li>";
			}
			echo "</ol>";
			?>
			
			<? 
			//echo "<pre>";
			//print_r ($_SESSION);
			//echo "</pre>";
			}
			else{
			echo "брони отсутствуют";
			}
			?>
			
			</div>



</div>
<script>
		$(document).ready(function () {
			// initialize stickyTableHeaders _after_ tablesorter
			$(".alert").fadeIn(1000);
		});
	</script>