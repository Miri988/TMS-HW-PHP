<?php
//Дан массив из n чисел, вывести индекс каждого элемента, у которого значение равен квадрату своего индекса, если нету таких элементов, то вывести слово 'not found'
$arr = array (1, 1, 4, 5, 6, 8);
foreach ($arr as $key => $elem) {
    if ($elem == $key**2) {
        echo "Result: $key" .PHP_EOL;
    } else {
        echo 'Not found' .PHP_EOL;
      }
}