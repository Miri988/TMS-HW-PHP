<?php
//Удалите указанный элемент из массив. После удаления элемента необходимо нормализовать целочисленные ключи.
$arr = array('big', 'mouse', 'cat', 'laptop', 'text');
unset($arr[3]);
$arr = array_values($arr);
print_r($arr);