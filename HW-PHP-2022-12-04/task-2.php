<?php
//Разработайте функцию для вычисления площади прямоугольника.
$l = readline ("Enter length: ");
$w = readline ("Enter width: ");
function areaRec ($l, $w) {
    $area = $l*$w;
    return $area;
}
echo 'Площадь прямоугольника равнa ' .  areaRec ($l, $w);