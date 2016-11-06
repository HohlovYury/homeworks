<?


echo "Слова меньше: ".$_POST['count']."<br>";

$txt_file=file("test.txt");
   

$txt_array = explode(" ", $txt_file[0]); 

foreach($txt_array as $word){
	if(mb_strlen(utf8_decode($word))<$_POST['count']){
		
	echo $word;
	echo "[". mb_strlen(utf8_decode($word))."]";
	echo "<br>";
}}



?>
