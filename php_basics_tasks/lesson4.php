<meta charset="utf-8">
<?

echo "1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например \"Иннокентий\".</br>";
echo $name="Иннокентий";
echo "<br>";

echo "2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.</br>";
echo $age=45;
echo "<br>";

echo "3. Выведите с помощью echo фразу \"Меня зовут: %ваше_имя%\", например: \"Меня зовут: Иннокентий\".</br>";
echo "Меня зовут: Юрий";
echo "<br>";

echo "4. Выведите фразу \"Мне %ваш_возраст% лет\", например: \"Мне 20 лет\".</br>";
echo "Мне 45 лет";
echo "<br>";

echo "5. Напишите конструкцию if, которая выводит фразу: \"Вам еще работать и работать\" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).</br>";
if(($age>18)AND($age<59)){
	echo "Вам еще работать и работать";
}
echo "<br>";
echo "6. Расширьте конструкцию if из п.5, выводя фразу: \"Вам пора на пенсию\" при условии, что значение переменной age больше 59.</br>";
$age=65;
if(($age>=18)AND($age<=59)){
	echo "Вам еще работать и работать";
}
elseif ($age>59) {
    echo "Вам пора на пенсию";
}
echo "<br>";
echo "7. Расширьте конструкцию if из п.5-6, выводя фразу: \"Вам еще рано работать\" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).</br>";
$age=12;
if(($age>=18)AND($age<=59)){
	echo "Вам еще работать и работать";
}
elseif ($age>59) {
    echo "Вам пора на пенсию";
}
elseif($age<18) {
	echo "Вам еще рано работать";
}
echo "<br>";
echo "8. Расширьте конструкцию if из п.5-7, выводя фразу: \"Неизвестный возраст\" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.</br>";
if(($age>=18)AND($age<=59)){
	echo "Вам еще работать и работать";
}
elseif ($age>59) {
    echo "Вам пора на пенсию";
}
elseif(($age-60)<0)
{
	echo "Неизвестный возраст";
	}
elseif(!is_numeric($ege))
{
	echo "Неизвестный возраст";
	}
echo "<br>";

echo "9. Создайте переменную day и присвойте ей произвольное числовое значение.</br>";
echo $day=3;
echo "<br>";

echo "10. С помощью конструкции switch выведите фразу: \"Это рабочий день\", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).</br>";

switch ($day):
case 1:
    echo "Это рабочий день";
    break;
case 2:
    echo "Это рабочий день";
    break;
case 3:
    echo "Это рабочий день";
    break;
case 4:
    echo "Это рабочий день";
    break;
case 5:
    echo "Это рабочий день";
    break;
default:
    echo "Это возможно выходной день";
endswitch;
echo "<br>";

echo "11. С помощью конструкции switch выведите фразу: \"Это выходной день\", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).</br>";
echo $day=6;
echo "<br>";
switch ($day):
case 6:
    echo "Это выходной день";
    break;
case 7:
    echo "Это выходной день";
    break;
default:
    echo "Это возможно рабочий день";
endswitch;
echo "<br>";

echo "12. С помощью конструкции switch выведите фразу: \"Неизвестный день\", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</br>";
$day=0;
switch ($day):
case 1:
    echo "Это рабочий день";
    break;
case 2:
    echo "Это рабочий день";
    break;
case 3:
    echo "Это рабочий день";
    break;
case 4:
    echo "Это рабочий день";
    break;
case 5:
    echo "Это рабочий день";
    break;
case 6:
    echo "Это выходной день";
    break;
case 7:
    echo "Это выходной день";
    break;
default:
    echo "Неизвестный день";
endswitch;
echo "<br>";

echo "13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</br>";
echo $s=50;
echo "</br>";
echo $t=40;
echo "</br>";
echo "Скорость: ".$s/$t."км/час";
echo "Скорость: ".($s*1000)/($t*60)."м/сек";
echo "<br>";
echo "14. Задана переменная \$foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10, используя только переменную $foo (не опечатка).<br>";
echo $foo = "bar";
unset ($foo);
echo "<br>";
$foo = 10;
echo "<br>";
echo "$foo";
echo "<br>";
echo "15. Написать калькулятор. Переменная \$a = изменяемое число. Переменная $b = изменяемое число. Переменная \$operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).</br>";
echo $a=1000;
echo $b=300;
echo $operator2 = "/";
echo $a.$operator2.$b;
echo "<br>";
echo "???????????? есть вопрос ?????????????</br>";
echo "<br>";
?>
<form method="get" action="index.php">
<label for="username">Чило №1<br></label><input type="text" name="number1"><br>
<label for="username">Чило №2<br></label><input type="text" name="number2"><br>
<select name="operator">
  <option>+</option>
  <option>+</option>
  <option>-</option>
  <option>*</option>
  <option>/</option>
</select><br><br>
<input type="submit" value="посчитать">
</form>
<?
if(!$_GET["operator"]){echo "не выбрано действие";}
elseif(!$_GET["number1"]){echo "не выбрано значение 1";}
elseif(!$_GET["number2"]){echo "не выбрано значение 2";}
elseif($_GET["number2"==0]){echo "на ноль делить нельзя";}
else{
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operator = $_GET['operator'];

echo $number1 . $operator . $number2 . '=';

switch ($operator) {
    case '+':
        echo $number1 + $number2;
        break;
	case '-':
        echo $number1 - $number2;
        break;
    case '*':
        echo $number1 * $number2;
        break;
	case '/':
        echo $number1 / $number2;
        break;
}
}
echo "</br>";

//На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

echo "16. Создайте две переменные \$a и \$b, значения которых будут числами. Выведите максимальное число из этих двух.</br>";
echo $a=200;
echo "<br>";
echo $b=500;
echo "<br>";
if($a>$b){
	echo "\$a больше";
}
else{
	Echo "\$b больше";
}
echo "<br>";	

echo "17. Создайте две переменные \$a = '\78' (строковый тип) и \$b = 78 (целочисленный тип). Проверьте эти две переменные на равность, с помощью if выведите \"равны\" или \"не равны\".</br>";
echo $a = '78';
echo "<br>";
echo $b = 78;
echo "<br>";
if($a==$b){echo "равны";}else{echo "не равны";}
if($a!=$b){echo "не равны";}else{echo "равны";}
echo "<br>";
echo "18. Создайте две переменные \$a = '78' (строковый тип) и \$b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите \"эквивалентны\" или \"не эквивалентны\".<br>";
echo $a = '78';
echo "<br>";
echo $b = 78;
echo "<br>";
if($a===$b){echo "эквивалентны";}else{echo "не эквивалентны";}
echo "<br>";

echo "19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.<br>";

echo $b = 3.1;
echo "<br>";
echo $c = TRUE;
var_dump($b,$c);
if (var_dump($b)===var_dump($c)){echo "эквивалентны";}else{echo "не эквивалентны";}
echo "<br>";
echo "???????????? есть вопрос ?????????????</br>";
echo "<br>";

echo "20. Приведите число 20 к типу boolean. Объясните результат.<br>";
echo var_dump((bool) 20);
echo "<br>";
echo "???????????? есть вопрос ?????????????</br>";
echo "<br>";	
echo "21. Приведите число 0 к типу boolean. Объясните результат.<br>";
echo var_dump((bool) 0);
echo "<br>";
echo "???????????? есть вопрос ?????????????</br>";
echo "<br>";
echo "22. Приведите число -20 к типу boolean. Объясните результат.<br>";
echo var_dump((bool) -20);
echo "???????????? есть вопрос ?????????????</br>";
echo "<br>";
echo "23. Напишите 3 строки, используя три разные функции для вывода текста.<br>";
echo "text echo<br>";
print "text print<br>";
?>
text html<br>
<?
echo "<br>";
echo "24. Создайте в файле 3 комментария тремя разными типами.</echo>";
// комментарий №1
echo "// комментарий №1</br>";
/*==========комментарий №2 ============*/
echo "/*==========комментарий №2 ============*/</br>";
?>
<!-- комментарий №3 --></br>
<?
//25. Приведите пример, чем отличается &lt;?php от &lt;?=.=============
?>
&lt;?php это начало php кода </br>
&lt;?= это аналог конструкции &lt; echo </br>
<?
echo "<br>";
echo "26. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.</br>";
define("DAYS_COUNT", 7);
echo "define(\"DAYS_COUNT\", 7);";
echo "<br>";
define("MONTH_COUNT", 12);
echo "define(\"MONTH_COUNT\", 12);";
echo "<br>";

echo "27. Выполните скрипт по задаче №4 из консоли (необходимо запустить php скрипт по задаче №4 из командной строки).</br>";
?>
php lesson4.php 
<br>
???????????? есть вопрос ?????????????