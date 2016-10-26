<?
session_start();
if($_GET['destr']==1){session_destroy();}else{}

//echo "<pre>";
//print_r ($_GET);
//echo "</pre>";
//echo "<hr>";

if(($_GET['name'])AND($_GET['count'])AND($_GET['price'])AND($_GET['flight'])){
$_SESSION['ticket'][] = $_GET;
}
else{
	echo "<p class=\"alert\">заполните поля отмеченные *</p>";
}


?>
<div class=" resault_full">

<div class="count">	
Всего:
<? echo $count_us = count($_SESSION['ticket']);?>
 записей
</div>
<div class="clear">		<a href="?destr=1">очистить</a>		</div>

</div>
<div class="resault_full">

	
		

<h3 class="center">Список</h3>
	<div id="resault" class="resault">
		
			
			<?
			
			sort($arr_flight);
			foreach($arr_flight as $val_city=>$kay_city)
			{
		

			
			echo "<h4 class=\"name\">".$arr_flight[$val_city]."</h4>";	
			echo "<ol>";
			if($_SESSION['ticket']){
			foreach($_SESSION['ticket'] as $volue=>$kay )
			{
			if($_SESSION['ticket'][$volue]['flight']==$arr_flight[$val_city]){
				echo "<li>";
				echo "<h4 class=\"name\">".$_SESSION['ticket'][$volue]['name']."</h4>";
				echo "<p class=\"seance\">".$_SESSION['ticket'][$volue]['flight']."</p>";
				echo "<p class=\"count\">Билетов: ".$_SESSION['ticket'][$volue]['count'];
				echo " Стоимостью: ".$_SESSION['ticket'][$volue]['price']."грн</p>";
				
				echo "</li>";
				}	
			}
			}
			
			echo "</ol>";
				
			}
			

		//	echo "<pre>";
		//	print_r ($_SESSION['ticket']);
		//	echo "</pre>";

			
			
			?>
			
			</div>



</div>
