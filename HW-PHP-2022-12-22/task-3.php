<?php
//Пусть у вас есть файл, в котором записано некоторое число. Откройте этот файл, возведите число в квадрат и запишите обратно в файл.
$file = fopen('123.txt', 'r') or die("Невозможно открыть файл!");
$aaa = fread($file, filesize('123.txt'));
$kv = pow ((int) $aaa, 2);
file_put_contents('123.txt', $kv);
fclose ($file);