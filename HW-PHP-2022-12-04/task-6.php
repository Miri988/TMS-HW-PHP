<?php
//Напишите функции biggestSymbol(str) и summOfSymbols(str). Первая функция должна определить самый большой символ (по ASCII код) в строке , а вторая функция должна определить сумму всех символов (по ASCII код) в строке, возвращайте результат через return (с.м. функцию ord)
$str = (string) readline ("Enter string: ");
function biggestSymbol($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        $a[] = ord($str[$i]);
    }
    $max = max($a);
    return $max;
}
function summOfSymbols($str) {
    $sum = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $a = ord($str[$i]);
        $sum += $a;
    }
    return $sum;
}
echo 'Big symbol: ' . biggestSymbol($str) .PHP_EOL;
echo 'Summa symbols: ' . summOfSymbols($str) .PHP_EOL;