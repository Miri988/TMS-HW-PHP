<?php
//Пусть у вас есть файлы 1.txt и 2.txt, в тексте которых записаны какие-то числа. Напишите скрипт, который выведет на экран сумму записанных в этих файлах чисел.
$file1 = fopen('1.txt', 'r') or die("Невозможно открыть файл!");
$file2 = fopen('2.txt', 'r') or die("Невозможно открыть файл!");

$aaa = fread($file1, filesize('1.txt'));
$bbb = fread($file2, filesize('2.txt'));

$array1 = explode(' ', $aaa);
$array2 = explode(' ', $bbb);

$sum1 = array_sum($array1);
$sum2 = array_sum($array2);
$summa = $sum1 + $sum2;

echo 'Сумма чисел в файлах - ' . $summa;

fclose($file1);
fclose($file2);