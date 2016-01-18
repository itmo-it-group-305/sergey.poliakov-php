<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 13.01.16
 * Time: 16:34
 */
$year = 2000;
$yearCheck = (is_int($year) ? $year % 4 == 0 ? $year % 400 == 0 && $year % 100 == 0 ? "високосный год" : "невисокосный год" :  "невисокосный год"  : "неправильный ввод");
var_dump($yearCheck);
