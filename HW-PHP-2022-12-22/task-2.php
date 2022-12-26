<?php
//Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt.
$arr = [1, 58, 75, 4, 6, 10];
$sum = array_sum($arr);
$file = fopen('sum.txt', 'a+') or die("Невозможно открыть файл!");
file_put_contents('sum.txt', $sum);
fclose ($file);