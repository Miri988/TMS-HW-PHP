<?php
//Дано трехзначное число. Найдите сумму цифр. (811 -> 8 + 1 + 1) (Решите задачу с помощью деления).
$a=readline ("Enter number: ");
$b=$a%10;
echo readline ("Last symbol: $b");
$c=(($a%100)-$b)/10;
echo readline ("Middle symbol: $c");
$d=($a-($c*10)-$b)/100;
echo readline ("First symbol: $d");
$sum=$b+$c+$d;
echo readline ("Result: $sum");