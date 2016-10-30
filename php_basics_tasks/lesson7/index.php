<meta charset="utf-8">

1. 5 сотрудников<br />
2. 5 рабочих дней<br />
3. пятый день короткий<br />
4. 1 рабочий день 400грн<br />
5. опоздание -50грн.<br />
6. сверхурочные *2 за час<br />
7 зарплата каждую пятницу<br />


<?php
//==============имена сотрудников============
$staff = array('Хоменко'=>1, 'Петренко'=>2, 'Гончаренко'=>3, 'Клименко'=>4, 'Харченко'=>5);
$rate_day = 400;
$fine = 50;

$rate_hour = $rate_day/8;
$bonus = $rate_hour*2;
$lateness = array(0,0,1,0,1);
//============= количество рабочих часов в рабочих днях =================
$work_days = array('1=>8','2=>8','3=>8','4=>8','5=>7');
//===================== ОТРАБОТАННЫЕ ДНИ СОТРУДНИКАМИ =============
$staf_work_hour['Хоменко'] =    array(1 => 9,2 => 8,3 => 9,4 => 8,5 => 7,);
$staf_work_hour['Петренко'] =   array(1 => 8,2 => 11,3 => 8,4 => 8,5 => 7,);
$staf_work_hour['Гончаренко'] = array(1 => 8,2 => 8,3 => 8,4 => 8,5 => 8,);
$staf_work_hour['Клименко'] =   array(1 => 8,2 => 8,3 => 8,4 => 8,5 => 8,);
$staf_work_hour['Харченко'] =   array(1 => 8,2 => 8,3 => 8,4 => 8,5 => 7,);


foreach($staff as $staf_name=>$key){
 echo "<h3>".$staf_name." ".$key.":</h3> ";
$h=1;
 foreach ($staf_work_hour[$staf_name] as $one_staf_work_hour) {
    $all_hours_one_staff_day=($staf_work_hour[$staf_name][$h++]);
 }
 //===========штрафы================
    if($lateness[$key]!=0){
        $fine_one =  $fine;
    }
    else{
        $fine_one =  0;
    }
//==================  бонусы ==============
     if(array_sum($staf_work_hour[$staf_name])>39){
         $bonus_one_staff =  (array_sum($staf_work_hour[$staf_name])-39)*$bonus;
       }
       else{
          $bonus_one_staff =  0;
       }
    echo "Отработанные часы: ";
    echo array_sum($staf_work_hour[$staf_name]);
    echo "<br>Из них переработано: ";
    echo array_sum($staf_work_hour[$staf_name])-39;
    echo "<br>Заработок по ставке: ";
    echo array_sum($staf_work_hour[$staf_name])*$rate_hour;
    echo "<br>Доплата за переработку: ";
    echo $bonus_one_staff;
    echo "<br>Штраф: ";
    echo $fine_one;
    echo "<br> К выплате: ";
    echo  $earnings = (array_sum($staf_work_hour[$staf_name]))*$rate_hour-$fine_one+$bonus_one_staff ;
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



?>


