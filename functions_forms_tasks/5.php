<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/mine.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<h4 class="left">5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.</h4>


<? 

?>


<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">
<form class="form-horizontal" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Список файлов в директории test_dir со словом "телескоп"</legend>
<!-- Textarea -->
<!-- Select Basic -->
<div class="form-group">
<?
$dir  = "test_dir";
$word = "телескоп";


function list_files($dir,$word){
$files = scandir($dir);


foreach($files as $fls){

if(($fls!=".")AND($fls!="..")) {
	
if (strpos(file_get_contents($dir."/".$fls), $word)){	
	echo $fls."<br>";
}
}
}
}
list_files($dir,$word)
?>
  </div>
</div>

 
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>