<?php
//Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.

require_once ('User.php');
$currentUser = new User;
$currentUser -> name = 'john';
$currentUser -> age = 25;

//Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.

echo 'Новый возраст - ' . $currentUser -> setAge (30) . PHP_EOL;

print_r($currentUser);

//Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.

$currentUser -> setAgenew (18);
print_r($currentUser);