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
  	<h5 class="center">7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.</h5>
<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">
<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Гостевая</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Имя*</label>  
  <div class="col-md-4">
  
  	<? $arr_name = array("Вася", "Петя", "Оля", "Ира", "Гена");
	$rand_name = array_rand($arr_name, 2);
	?>
	<input id="name" name="name" type="text" placeholder="Имя" Value="<?echo $arr_name[$rand_name[0]];;?>" class="form-control input-md">

  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tema">Тема</label>
  <div class="col-md-4">
    <select id="tema" name="tema" class="form-control">
      <option value="Жалоба">Жалоба</option>
      <option value="Комментарий">Комментарий</option>
      <option value="предложение">предложение</option>
      <option value="Другое">Другое</option>

    </select>
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="messeg">Комментарий</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="messeg" name="messeg">Комментарий</textarea>
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
			
			<? include "resault7.php";?>
			
			
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