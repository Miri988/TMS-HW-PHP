<?php
//Дано число N. Если число больше 10, то увеличьте на 100, иначе уменьшите на 30.
$a=(int) readline('Enter number: ');
if ($a>10) {
    $a+=100;
    echo "Result: $a";
} else {
    $a-=30;
    echo "Result: $a";
}