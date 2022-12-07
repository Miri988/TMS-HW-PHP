<?php
//Необходимо разработать функцию, позволяющую определить количество вхождений символа в строку (строка и символ задаются пользователем).
$str = (string) readline ("Enter string: ");
$sym = (string) readline ("Enter symbol: ");
function NumString ($str, $sym) {
    echo mb_substr_count($str, $sym);
}
NumString ($str, $sym);