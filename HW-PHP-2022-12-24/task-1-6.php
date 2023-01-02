<?php
//Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000.

require_once ('Employee.php');

$firstEmployee = new Employee ();
$firstEmployee -> name = 'john';
$firstEmployee -> age = 25;
$firstEmployee -> salary = 1000;

//Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000.

$secondEmployee = new Employee ();
$secondEmployee -> name = 'eric';
$secondEmployee -> age = 26;
$secondEmployee -> salary = 2000;

//Выведите на экран сумму зарплат созданных юзеров.

echo 'Сумма зарплат работников - '. $firstEmployee -> salary + $secondEmployee -> salary . PHP_EOL;

//Выведите на экран сумму возрастов созданных юзеров.

echo 'Сумма возростов работников - ' . $firstEmployee -> age + $secondEmployee -> age . PHP_EOL;

//Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.

echo $firstEmployee -> checkAge($firstEmployee -> age) . PHP_EOL;

echo $secondEmployee -> checkAge($secondEmployee -> age) . PHP_EOL;

//Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.

echo 'Сумма зарплат работников - ' . $firstEmployee -> getSalary($firstEmployee -> salary) + $secondEmployee -> getSalary($secondEmployee -> salary);
