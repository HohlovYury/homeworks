<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по массивам и циклам</title>
</head>
<body>

<h1>Задачи по массивам и циклам</h1>

<p><b>Все задания должны выполняться в папке arrays_loops_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>

<p>
<b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<b>Работа с foreach</b>
<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
<p>
<? 
$arr=array("html", "css", "php", "js", "jq");
foreach ($arr as $value) {
    echo $value."<br />\n";
}
?>
</p>
<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</p>
<p>
<? 
$arr=array(1, 20, 15, 17, 24, 35);

    echo $result=array_sum($arr);

?>
</p>

<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
<p>
<? 
$arr=array(26, 17, 136, 12, 79, 15);
foreach ($arr as $value) {
    $arr2[]=$value*$value;
}
echo $result=array_sum($arr2);
?>
</p>
<b>Работа с ключами</b>

<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
<p>
<?
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach(array_keys($arr) as $key){
    echo $key."<br>";
}
?>
</p>
<p>
<?
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $value) {
 echo $value."<br>";
}
?>
</p>


<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '300'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.</p>
<p>
<?
$arr = array('Коля'=>200, 'Вася'=>300,'Петя'=>300);
foreach ($arr as $key => $value) {
 echo $key."-зарплата ".$value."<br>";
}
?>
</p>


<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');
</p>
<?
unset($arr);

$en = array("green", "red", "blue");
$ru = array("зеленый", "красный", "голубой");

$x=0;
while ($x<=2) {

echo $en[$x];
$arr[] = array($en[$x]=>$ru[$x]);
$x++;
}
echo"<pre>";
 print_r ($arr);
 echo"</pre>";
?>




<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
<p>
<?
unset($arr);
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $value) {
    if(($value>3)AND($value<10)) echo $value."<br>";
}

?>
</p>

<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for</p>
<p>
<?
unset($arr);
$arr= array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value) {
	echo "-".$value;
}
echo "<br>";
$i=0;

while($i<count($arr)){
	
echo "-".$arr[$i];
$i++;	
}
echo "<br>";
for ($i = 1; $i <= count($arr); $i++) {
    echo "-".$i;
}

?>
</p>
<p>9. Выведите столбец чисел от 1 до 100.</p>
<p>
<?
$d = 1;
while($d <= 100)
{
echo $d . "<br />";
$d++;
}
?>
</p>
<p>10. Выведите столбец чисел от 11 до 33.</p>
<p>
<?
$d = 11;
while($d <= 33)
{
echo $d . "<br />";
$d++;
}
?>
</p>
<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>
<p>
<?
echo "<br>";

for ($v = 1; $v <= 100; $v++) {

	if (($v%2)==0)echo $v."<br>";

}
?>

</p>


<p>12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станетменьше 50. Какое число получится? Посчитайте количество итераций, необходимых дляэтого (итерации — это количество проходов цикла), и запишите его в переменную $num.</p>

<p>
<?
//$n = 1000;

$d = 1000;
do
{
$d = $d / 2;
echo $d . "<br />";

}
while ($d >= 125);

?>

</p>
<p>13. Вывести таблицу умножения</p>
<p>
<p>
<?
echo "<br>";
$m=1;
for ($v = 1; $v <= 100; $v++) {
$m++;
	echo 2*$m."<br>";

}
?>

</p>
</p>

<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
<p>
<?
$p=array(4, 2, 5, 19, 13, 0, 10);
$t=array(2, 3, 4);
foreach($t as $value)
if (in_array($value, $p)) {
    echo "есть <br>";
}
else{
	echo "нет<br>";
}
?>
</p>

<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,5, 19, 13, 0, 10.</p>
<p>
<?
$c=array(4, 2,5, 19, 13, 0, 10);
$count=0;
foreach($c as $value)
 {
    $count++;

}
echo $count;
?>
</p>
<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3, 4, 5, 6, 7, 8, 9</p>
???????????????????????????????????????
<p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
<p>
<?
$mn=array(1,2,3,4,5,6,7,8,9,10,11,12);
foreach($mn as $value)
{
if($value==10) {echo "<strong>".$value."</strong>";}else{echo $value;}
echo "<br>";
}
?>
</p>


<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.</p>
<p>
<?
$mn=array(1,2,3,4,5,6,7);
foreach($mn as $value)
{
if(($value==6)OR($value==7)) {echo "<strong>".$value."</strong>";}else{echo $value;}
echo "<br>";
}
?>
</p>

<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>

<p>
<?
$mn=array(1,2,3,4,5,6,7);
foreach($mn as $value)
{
if($value==7) {echo "<i>".$value."</i>";}else{echo $value;}
echo "<br>";
}
?>
</p>

<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>
<p>
<?php
	$st = '';
	for ($i = 1; $i <= 20; $i++)
	{
		$st .= 'x';
		echo $st.'<br>';
	}
?>
</p>

<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555</p>
<p>
<?php
	for ($i = 1; $i <= 9; $i++)
	{
		for ($h = 0; $h < $i; $h++)
		{
			$sr .= $i;
		}
		echo $sr.'<br>';
		$sr = '';
		$h = 0;
	}
?>
</p>


<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>

<p>
<?php
	$st = '';
	for ($i = 1; $i <= 5; $i++)
	{
		$st .= 'xx';
		echo $st.'<br>';
	}
?>
</p>

<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,2, 3, т. е. 6.</p>
<?php

$numb = '12887687848657653';
if (is_numeric($numb)) {
$number = str_split($numb);	
        echo array_sum($number);
    } else {
        echo "введите правильно число";
    }

?>
</p>

По желанию можете сделать проверку на корректность введения данных пользователем.
<p>24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.</p>

<p>
<?

$text = '442158755745986866352123456789044';
echo substr_count($text, '4');
?>
</p>


<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.</p>

<p>
<?php      
for($i=0;$i<15;$i++){
	$mas[]=rand(0,20);
	}

	echo "<pre>";
	print_r ($mas);
	echo "</pre>";
	echo $min = min($mas);
	echo "<br>";
	echo $max = max($mas);
	echo "<br>";
	
?>
тут есть вопрос??????????????????

</p>
<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>

<p>
<?php 
$key='';     
for($i=0;$i<15;$i++){
	$mas[]=rand(0,100);
	}
echo "<pre>";
	print_r ($mas);
	echo "</pre>";
	foreach($mas as $key => $value){
	if($key % 2==0){
		echo $value."<br>";
	}
	}
	echo "<hr>";
		foreach($mas as $key => $value){
	if($key % 2==1){
		echo $value."<br>";
	}
	}
	
?>
</p>

<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. <br><br>

Пример результата:<br>

<table>
<tr>
	<td style='background-color:blue'>2033</td>
	<td style='background-color:brown'>11696</td>
	<td style='background-color:green'>712</td>
	<td style='background-color:yellow'>32583</td>
	<td style='background-color:red'>157</td>
</tr>
<tr>
	<td style='background-color:gray'>25694</td>
	<td style='background-color:red'>19724</td>
	<td style='background-color:brown'>18487</td>
	<td style='background-color:brown'>8462</td>
	<td style='background-color:red'>4412</td>
</tr>
<tr>
	<td style='background-color:gray'>4673</td>
	<td style='background-color:gray'>14450</td>
	<td style='background-color:maroon'>16748</td>
	<td style='background-color:gray'>3505</td>
	<td style='background-color:maroon'>5299</td>
</tr>
<tr>
	<td style='background-color:red'>16873</td>
	<td style='background-color:gray'>21370</td>
	<td style='background-color:green'>22482</td>
	<td style='background-color:red'>28576</td>
	<td style='background-color:blue'>26060</td>
</tr>
<tr>
	<td style='background-color:yellow'>28955</td>
	<td style='background-color:gray'>8804</td>
	<td style='background-color:gray'>26825</td>
	<td style='background-color:red'>31471</td>
	<td style='background-color:blue'>22283</td>
</tr>
</table>

</p>
<p>
<?
$row = 15;
$cols= 11;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>
<table>
<?
for($i=0;$i<$row;$i++){
	echo "<tr>";
		for ($id=0;$id<$cols;$id++){
?>			
<td style="background-color:<? echo $colors[array_rand($colors)];?>"><? echo $colors[array_rand($colors)];?></td>
<?		}
	echo "</tr>";
	}
?>
</table>

</p>


<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>
<p>
<?
$row = 10;
$cols= 10;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>
<table>
<?
for($i=1;$i<$row;$i++){
	echo "<tr>";
		for ($id=1;$id<$cols;$id++){
?>			
<td><? echo $i*$id; ?> </td>
<?		}
	echo "</tr>";
	}
?>
</table>

</p>

<hr>
<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>