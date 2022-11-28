<?php
//Дана строка. Найти самое длинное слово
$str=(string) readline ("Enter string: ");
$array=explode(' ', $str);
$maxlen = $array[0];
for ($i=0; $i<count($array); $i++) {
    if(strlen($array[$i]) > strlen($maxlen)){
        $maxlen = $array[$i];
      }
    }
echo "Result: $maxlen";