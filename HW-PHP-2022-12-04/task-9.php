<?php
//
$str = (string) readline ("Enter numbers: ");
$arr = explode(' ', $str);  
function bouble_sort($arr) {
    for ($i = 0; $i < count($arr)-1; $i++) {
        $min = $i;
        for ($j = $i+1; $j < count($arr); $j++) { 
            if($arr[$j] < $arr[$min] ) {
                $temp = $arr[$min];
                $arr[$min] = $arr[$j];
                $arr[$j] = $temp;         
            }           
        }   
    } 
    return $arr;  
}
print_r(bouble_sort($arr));