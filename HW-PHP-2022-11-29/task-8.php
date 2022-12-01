<?php
//Сформируйте массив ключ - значение. Каждое значение - это ещё один массив. Например: ключ - название города, значение - список улиц. Или любой другой массив, со схожим форматом. Выведите данный массив на экран (консоль или браузер)
$city = array (
    'Minsk' => array ('Bogdanovicha', 'Sovetskaja', 'Lenina'),
    'Brest' => array ('Sovetskaja', 'Kosmonavtov', 'Gogolja'),
    'Grodno' => array ('Solomovoj', 'Sovetskaja', 'Popova')
);
foreach ($city as $town => $street) {
    echo "$town:" .PHP_EOL;
    foreach ($street as $key => $value) { 
        echo "$value" .PHP_EOL;
    }
}