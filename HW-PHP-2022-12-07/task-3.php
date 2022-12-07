<?php
//Дана строка с буквами, пробелами и цифрами. Найдите сумму всех чисел из данной строки
$str = (string) readline ("Enter string: ");
$pattern = "/[a-zA-Z]+/";
echo array_sum(preg_split('/\s+/', preg_replace($pattern, '', $str)));