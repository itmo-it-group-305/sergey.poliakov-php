<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 11.01.16
 * Time: 19:15
 */
//echo "Hello world!";
$heyhey = "Hello world\n";
echo $heyhey;
var_dump($heyhey);

var_dump(1.0 + 1, true);

$arr = [1, '2', true];

var_dump($arr);

$obj = new StdClass();
$obj->firstname = 'Vasya';
$obj->lastname = 'Pupkin';
var_dump($obj);

//phpinfo();

var_dump((bool) $heyhey);
$fallse = false;
var_dump((bool) $fallse);
var_dump((bool) 0);
var_dump((bool) 0.00);
var_dump((bool) "");
$arr = [];
var_dump((bool) $arr);
var_dump((bool) $jojo);
$jojo = null;
var_dump((bool) $jojo);