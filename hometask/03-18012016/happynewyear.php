<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 18.01.16
 * Time: 16:11
 */


function happyNewYear () {
    $day = (int) date('z');
    $year = date('Y');
    $yearCheck = ((int)$year ? $year % 4 == 0 ? $year % 400 == 0 && $year % 100 == 0 ? 366 : 365 :  365  : "ERROR");
    $daytill = $yearCheck-$day;
    echo "До Нового Года осталось: $daytill дней";
}

happyNewYear();

