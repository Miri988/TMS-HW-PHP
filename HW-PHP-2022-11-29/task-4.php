<?php
//Задан массив слов. Осуществить поиск по заданному слову и вывести индекс элемента массива.
$arr = array('big', 'mouse', 'cat', 'laptop', 'text');
$key = array_search('mouse', $arr);
echo "Result: $key";