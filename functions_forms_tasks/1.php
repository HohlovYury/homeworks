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
  	<h4 class="center">1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.</h4>


<? 
$text1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur voluptatem ipsa molestias accusamus repellendus quod fuga placeat est officia! Nisi, fuga consequatur modi delectus veritatis rem nihil mollitia architecto ad!";

$text2="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, ipsam, similique, id, explicabo dicta dolorum repellendus ea excepturi minima nulla molestias ut velit! Dolorum, illo nihil in delectus voluptatibus magni";
?>


<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">
<form class="form-horizontal" method="POST">
<fieldset>

<!-- Form Name -->
<legend>форма с двумя элементами textarea</legend>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="text1">$text1</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="text1" name="text1"><? echo $text1;?></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text2">$text2</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="text2" name="text2"><? echo $text2;?></textarea>
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
			
			<? include "resault1.php";?>
			
			
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