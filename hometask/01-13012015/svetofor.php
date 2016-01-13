<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 13.01.16
 * Time: 16:57
 */
$time = date(i) % 5;
$color = ($time == 0 || $time == 1 || $time == 2 ? "green" : "red");
echo $color;