<?php
//Дано натуральное число N > 1. Составьте программу, которая вычисляет сумму квадратов чисел от 1 до N.
$n=(int)readline("Enter number: ");
$sum=0;
if ($n<=1){
    echo 'Error';
} else {
  for ($i=1; $i<=$n; $i++) {
   $sum+=$i**2;
   echo "Result: $sum" .PHP_EOL;}
  }