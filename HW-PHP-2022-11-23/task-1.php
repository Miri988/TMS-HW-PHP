<?php
//Создайте переменную $a со значением 10 и переменную $b со значением 5. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
$a=(int) readline ("Enter a: ");
$b=(int) readline ("Enter b: ");
$c=$a-$b;
echo readline ("Subtraction result: $c");
$d=(int) readline ("Enter d: ");
$result=$c+$d;
echo readline ("Result: $result");