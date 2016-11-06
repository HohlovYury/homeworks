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
  	<h4 class="center">2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</h4>


<? 
$text1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur voluptatem ipsa molestias accusamus repellendus quod fuga placeat est officia! Nisi, fuga consequatur modi delectus veritatis rem nihil mollitia architecto ad!";
?>


<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">
<form class="form-horizontal" method="POST">
<fieldset>

<!-- Form Name -->
<legend>ТОП3 длинных слов в тексте</legend>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="text1">$text1</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="text1" name="text1"><? echo $text1;?></textarea>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Отправить</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Отправить</button>
  </div>
</div>

</fieldset>
</form>


		</div>
		<div class="col-sm-5 blog-main">
			<div id="resault" class="resault">
			
			<? include "resault2.php";?>
			
			
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