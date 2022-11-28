<?php
//Дано натуральное число N. Если число четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.
$n=(int)readline("Enter number: ");
if ($n<=0){
    echo 'Error';
} elseif ($n>=1 && $n%2===0) {
    $n/=2;
    echo "Result: $n";
} else {
    $n*=3;
    echo "Result: $n";
}