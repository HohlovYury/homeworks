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
  	<h2 class="center">Админ-страница для бронирования билетов на самолет</h2>
<div class="container gray">
	<div class="row">

	
     <div class="col-sm-7 blog-main">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Бронирование мест в самолете</legend>

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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fone">Телефон*</label>  
  <div class="col-md-4">
  <input id="fone" name="fone" type="text" placeholder="Телефон" value="067<? echo rand(1111111, 9999999);?>" class="form-control input-md">
 
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="count">Количество взрослых*</label>
  <div class="col-md-4">
    <select id="count" name="count" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="count_child">Количество детей</label>
  <div class="col-md-4">
    <select id="count_child" name="count_child" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Рейс*</label>
  <div class="col-md-4">
    
	<? $arr_flight = array("Париж", "Лондон", "Стамбул", "Прага", "Рим");
	$rand_flight = array_rand($arr_flight, 2);
	?>
	<input id="flight" name="flight" type="text" placeholder="Рейс" Value="<?echo $arr_flight[$rand_flight[0]];;?>" class="form-control input-md">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Стоимость</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="price-0">
      <input type="radio" name="price" id="price-0" value="30" checked="checked">
      30
    </label> 
    <label class="radio-inline" for="price-1">
      <input type="radio" name="price" id="price-1" value="40">
      40
    </label> 
    <label class="radio-inline" for="price-2">
      <input type="radio" name="price" id="price-2" value="50">
      50
    </label> 
    <label class="radio-inline" for="price-3">
      <input type="radio" name="price" id="price-3" value="80">
      80
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="manager">Менеджер</label>
  <div class="col-md-4">
    <select id="manager" name="manager" class="form-control">
      <option value="Петрова">Петрова</option>
      <option value="Иванова">Иванова</option>
      <option value="Хоменко">Хоменко</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nasseg">Примечание</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="nasseg" name="nasseg">Примечание</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Бронировать</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Бронировать</button>
  </div>
</div>

</fieldset>
</form>


		</div>
		<div class="col-sm-5 blog-main">
			<div id="resault" class="resault">
			
			<? include "resault.php";?>
			
			
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