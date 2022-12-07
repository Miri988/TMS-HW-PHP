<?php
//Напишите функцию count_function_calls(), которая возвращает сколько раз была вызвана функция count_function_calls().
function count_function_calls() {
    static $a = 1;
    echo $a;
    $a = $a + 1;
}
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();