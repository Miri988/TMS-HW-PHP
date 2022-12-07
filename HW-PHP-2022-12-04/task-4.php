<?php
//Разработайте функцию, с помощью которой можно проверить является ли заданная строка палиндромом.
$str = (string) readline ("Enter string: ");
function Pal ($str) {
    $str = str_replace(' ', '', $str);
    if ($str == strrev ($str)) {
        echo 'Yes';
    } else {
        echo 'No';
    }
}
Pal($str);