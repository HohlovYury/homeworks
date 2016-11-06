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
  	<h5 class="center">10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</h5>
<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">
<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>функция которая переворачивает строку</legend>





<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="messeg">Комментарий</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="messeg" name="messeg">
	NASA завершила сборку орбитальной инфракрасной обсерватории, который предназначен для смены космического телескопа «Хаббл». Теперь «James Webb» тестируют перед предстоящим запуском, который состоится в 2018 году. Новый телескоп собрали и теперь тестируют перед предстоящим запуском в 2018 году. Главный научный сотрудник Джон Метер сообщил, что «управление надеется, что телескоп выдержит запуск, поэтому его испытывают». Телескоп еще на Земле проверят такими нагрузками, которые ему придется выдержать при запуске в космос. Даже воссоздадут тряску и шумовые нагрузки.
	</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Комментировать</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Комментировать</button>
  </div>
</div>

</fieldset>
</form>


		</div>
		<div class="col-sm-5 blog-main">
			<div id="resault" class="resault">
			
			<? include "resault10.php";?>
			
			
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