<?php
//Сформируйте массив из слов введенных пользователем. Выведите полученный массив на экран.
$str = (string) readline ("Enter words: ");
$array = explode(' ', $str);
print_r($array);