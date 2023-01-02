<?php
//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
//Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
//Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.

class Employee {
    public string $name;
    public int $age;
    public int $salary;

    public function checkAge ( int $age)
    {
        if ($age >= 18) {
            echo 'Работнику уже есть 18';
        } else {
            echo 'Работнику нет 18';
        }
    }
    public function getSalary ( int $salary): int
    {
        return $this -> salary;
    }
}