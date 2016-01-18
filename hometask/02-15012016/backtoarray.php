<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 18.01.16
 * Time: 13:59
 */

$myArray = [1, 2, 3, 8, 14, 89, 45];
$length = count($myArray) - 1;

for ($i = 0; $i <= $length/2; $i++) {
    $myArray[$i] = $myArray[$i] + $myArray[$length-$i];
    $myArray[$length-$i] = $myArray[$i] - $myArray[$length-$i];
    $myArray[$i] = $myArray[$i] - $myArray[$length-$i];
}

print_r($myArray);



