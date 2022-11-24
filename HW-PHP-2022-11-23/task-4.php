<?php
//Введите строку (readline()). Выведите на экран ее первый, предпоследний, последний символы.
$str=readline ("Enter string: ");
echo readline ("First symbol: $str[0]");
echo readline ("Pre-last symbol: {$str[strlen($str) - 2]}");
echo readline ("Last symbol: {$str[strlen($str) - 1]}");