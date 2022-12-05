<?php
//Напишите функцию, которую определяет длину гипотенузы прямоугольного треугольника. Возвращайте длину через return.
$a = readline ("Enter length cathetus: ");
$b = readline ("Enter length cathetus: ");
function LengthHyp ($a, $b) {
    $LengthHyp = hypot($a, $b);
    return $LengthHyp;  
}
echo "Length hypotenuse: " .  LengthHyp ($a, $b);