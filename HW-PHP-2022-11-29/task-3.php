<?php
//Даны два массива n и m. Образовать из этих двух массивов единый упорядоченный по убыванию массив.
$arr1 = array(2, 5, 0, 4, 2, 8, 10, 0);
$arr2 = array(-4, 15, 1, 4, 6, 7, 9, -5);
$bigarray = array_merge($arr1,$arr2);
arsort($bigarray);
print_r($bigarray);