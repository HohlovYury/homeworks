<?
echo "<pre>";
print_r ($_POST);
echo "</pre>";
echo "<hr>";

function sort_by_len($f,$s)
{
	if(strlen($f)>strlen($s)) return true;
	else return false;
} 
	$in=explode(" ", $text1); 

uasort($in,'sort_by_len'); 

$sort_by_len = array_slice($in, -3);
foreach($sort_by_len as $free_max_words ){
	echo $free_max_words."<br>";
}

?>
