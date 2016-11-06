<? session_start();
?>

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
  	<h5 class="center">6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</h5>
<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">


<form enctype="multipart/form-data" action="resault6.php" method="post">

<legend>Загрузка файлов</legend>
 <input type="hidden" name="MAX_FILE_SIZE" value="500000">
 Загружаемый файл: <input type="file" name="uploadfile">
 <input type="submit" value="Загрузить выбранный файл" name="submit">
</form>


		</div>
		<div class="col-sm-5 blog-main">
			<div id="resault" class="resault">
			
			<? include "resault6.php";?>
			
			
			</div>

		</div>
	</div>
</div>
 
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>