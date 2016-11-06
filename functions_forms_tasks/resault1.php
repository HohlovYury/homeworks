<?
echo "<pre>";
print_r ($_POST);
echo "</pre>";
echo "<hr>";

if(($_POST['text1'])AND($_POST['text2'])){
	function getCommonWords($text1,$text2)
{
	$result = array_intersect(explode(" ", $text1), explode(" ", $text2));

foreach($result as $words){
	echo $words."<br>";
}
}
}
else{
	echo "<p class=\"alert\">заполните поля отмеченные *</p>";
}

getCommonWords($_POST['text1'],$_POST['text2'])
?>
