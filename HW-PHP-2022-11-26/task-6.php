<?php
//C помощью цикла определите является ли заданная строка палиндромом (слово или фраза, которые одинаково читаются слева направо и справа налево).
$str=(string) readline ("Enter string: ");
$len = strlen($str);
for($i = 0;$i <= $len/2; $i ++) {
    if ($str[$i] != $str[$len-1-$i]) {
        echo 'No palindrom' .PHP_EOL;
        break;
    } 
    echo 'Palindrom' .PHP_EOL;
} 