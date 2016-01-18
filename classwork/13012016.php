<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 13.01.16
 * Time: 19:13
 */

echo "Задача 1 <br>";

for ($i=1; $i < 11; $i++) {
    $feet = $i * 0.453;
    echo $feet;
    echo "<br>";
}

echo "<br> Задача 2 <br>";

$tarelki = 124;
$fairy = 10;

while ($fairy > 0 && $tarelki > 0) {
    $tarelki--;
    $fairy = $fairy - 0.5;
    echo $fairy;
    echo "<br>";
}

if ($tarelki == 0) {
    echo "Тарелки конились. У вас осталось $fairy милилитров Fairy. Ехать в Финляндию за ним не надо!";
}
else {
    echo "Кончился Fairy. Езжайте в Финляндию, а то $tarelki тарелок будет невымыто!";
}

var_dump($_SERVER);

