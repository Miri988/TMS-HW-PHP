<?php
//Разработайте функцию для вычисления суммы произвольного количества заданных элементов.
$str = (string) readline ("Enter elements: ");
$arr = explode(' ', $str);
function sum ($arr) {
    echo array_sum($arr);
}
sum($arr);