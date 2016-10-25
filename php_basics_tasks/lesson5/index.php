<? session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cтраница для бронирования билетов в кукольный театр</title>

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
	<h2 class="center">Админ-страница для бронирования билетов в кукольный театр</h2>  
<div class="container gray">
	<div class="row">

	
<div class="col-sm-6 blog-main">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Бронирование мест в зале</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="name">Имя*</label>  
  <div class="col-md-10">
  <input id="name" name="name" type="text" placeholder="Имя заказчика" Value="Вася" class="form-control input-md">

  </div>
</div>

<!-- Text phone-->
<div class="form-group">
  <label class="col-md-2 control-label" for="fone">Телефон*</label>  
  <div class="col-md-10">
  <input id="fone" name="fone" type="text" placeholder="Телефон" value="067<? echo rand(1111111, 9999999);?>" class="form-control input-md">
 
  </div>
</div>



<!-- Select adult -->
<div class="form-group">
  <label class="col-md-2 control-label" for="count">Количество взрослых*</label>
  <div class="col-md-10">
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

<!-- Select children -->
<div class="form-group">
  <label class="col-md-2 control-label" for="count_child">Детей (-50%)</label>
  <div class="col-md-10">
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

<!-- price -->
<div class="form-group">
  <label class="col-md-2 control-label" for="price">Стоимость*</label>
  <div class="col-md-10"> 
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
  <label class="col-md-2 control-label" for="selectbasic">Сеанс*</label>
  <div class="col-md-10">
    <select id="selectbasic" name="seance" class="form-control">
      <option value="9.00">9.00</option>
      <option value="11.00">11.00</option>
      <option value="13.00">13.00</option>
      <option value="15.00">15.00</option>
      <option value="19.00">19.00</option>
      <option value="23.00">23.00</option>
    </select>
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-2 control-label" for="manager">Менеджер</label>
  <div class="col-md-10">
    <select id="manager" name="manager" class="form-control">
      <option value="Петрова">Петрова</option>
      <option value="Иванова">Иванова</option>
      <option value="Хоменко">Хоменко</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="nasseg">Примечание</label>
  <div class="col-md-10">                     
    <textarea class="form-control" id="masseg" name="masseg">Примечание</textarea>
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
		<div class="col-sm-6 blog-main">
			<div id="resault_right" class="resault_right">
			
			<? include "resault.php";?>
			
			
			</div>

		</div>
	</div>
</div>

 
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>
		$(document).ready(function () {
			// initialize stickyTableHeaders _after_ tablesorter
			$(".alert").fadeIn(1000);
		});
	</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>