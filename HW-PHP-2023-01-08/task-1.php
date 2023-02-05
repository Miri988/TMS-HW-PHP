<?php

require_once 'autoload.php';

$employee = new Employee;
$employee -> setSalary(2000);
$employee -> setName('Kate');
$employee -> setAge(25);
echo $employee -> getSalary() . '<br/>';
echo $employee -> getName() . '<br/>';
echo $employee -> getAge() . '<br/>';

$student = new Student;
$student -> setCourse(5); 
$student -> setName('Kate'); 
$student -> setAge(25);
$student -> addOneYear();
echo $student -> getCourse() . '<br/>'; 
echo $student -> getName() . '<br/>'; 
echo $student -> getAge() . '<br/>';

$student -> transferToNextCourse(5);


$programmer = new Programmer;
$programmer -> setLangs(['PHP', 'HTML', 'CSS']);
print_r($programmer -> getLangs());
echo '<br/>';
$driver = new Driver;
$driver -> setDr_exp(3);
$driver -> setDr_cat('B');
echo $driver -> getDr_exp() . '<br/>';
echo $driver -> getDr_cat() . '<br/>';
$driver -> setName ('Irena');
echo $driver -> getName();