<?php
//Выведите строку “x больше y” если переменная $x > $y. Иначе “х меньше y”.
if ($x>$y) {
    echo "x больше y";
}
else {
        echo "x меньше y";
    }
//Определите, находится ли заданное число в диапазоне от 50 до 100 (включительно [50;100]).
if ($x>=50 && $x<100) {
    echo "в диапозоне";
}
else {
    echo "не в диапозоне";
}

//Если А четное число - выведите строку “четное”.
if ($x %2 ==0) {
    echo "четное";
}
else {
    echo "нечетное";
}

//Задан год А, определите високосный ли он, если високосный - выведите строку “да”, иначе нет.
 if ($x%4 ==0) {
    echo "высокосный";
 }
 else {
    echo "не высокосный";
 }

 $a=readline ("Enter a: ");
 $b=readline ("Enter b: ");
 $c=readline ("Enter c: ");

 $disk=$b*2-4*$a*$c;
 if ($disk<0) {
    echo "корней нет";
 }
 elseif ($disk==0) {
    echo -$b/2;
 }
 else {
    echo (-1*$b+sqrt($disk))/2*$a .PHP_EOL;
    echo (-1*$b-sqrt($disk))/2*$a .PHP_EOL;
 }

 $month = (int)(readline('Enter year: '));
 switch ($month){
    case 12:
    case 1:
    case 2:
        echo 'Зима';
    break;

    case 3:
    case 4:
    case 5:
        echo 'Весна';
    break;

    case 6:
    case 7:
    case 8:
        echo 'Лето';
    break;

    case 9:
    case 10:
    case 11:
        echo 'Осень';
    break;
    default:
    echo 'Ошибка';
}

//Задана строка, выведите её на экран заданное количество раз. (Введите строку, введите количество повторений).
$a=(string) readline("Enter string: ");
$num=(int) readline ("Enter number: ");
for ($i=0; $i<$num; $i++) {
    echo $a .PHP_EOL;
}

//Задана строка, используя цикл for вывести все символы строки в обратном порядке.
$a=(string) readline("Enter string: ");
for ($i=strlen($a)-1; $i>=0; $i--) {
    echo $a[$i] .PHP_EOL;
}

//Даны 2 числа (a и b). Вывести сумму всех чисел от a до b. Если числа заданы неправильно - вывести сообщение об ошибке.
$a=(int) readline ("Enter a: ");
$b=(int) readline ("Enter b: ");
if ($a>$b) {
     echo "Error";
} else {
    $sum = 0;

for ($i=$a; $i<=$b; $i++) {
    $sum += $i;}
    echo $sum;
}


//Даны целые числа n и m. Вывести числа от 0 до 1000, у которых в значениях есть хотя бы одна цифра n, и не делятся на m.
$n=(int) readline ("Enter n: ");
$m=(int) readline ("Enter m: ");

  
for ($i = 0; $i < 1000; $i++) {
    if (
        strpos((string) $i, $a) >= 0
        && $i % $b !== 0
    ) {
        echo $i;
    }
}

