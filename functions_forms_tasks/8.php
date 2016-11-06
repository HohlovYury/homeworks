<? session_start();
include "txt_am.php";
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
  	<h5 class="center">8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем. 
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</h5>
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
  
  	<? 
	$arr_name = array("Вася", "Петя", "Оля", "Ира", "Гена");
	$rand_name = array_rand($arr_name, 1);
	
	$arr_txt_mat = array($mat1,$mat2,$mat3,$mat4,$mat5,$mat6,$mat7,$mat8,$mat9,);
	$rand_txt_mat = array_rand($arr_txt_mat, 1);
	
	?>
	<input id="name" name="name" type="text" placeholder="Имя" Value="<? echo $arr_name[$rand_name];?>" class="form-control input-md">

  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="messeg">Комментарий</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="messeg" name="messeg"><?echo $arr_txt_mat[$rand_txt_mat];?></textarea>
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
			
			<? include "resault8.php";?>
			
			
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