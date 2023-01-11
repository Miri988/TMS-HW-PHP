<?php

class Employee extends User 
{
    private int $salary;

    public function setSalary (int $salary)
    {
       $this -> salary = $salary;
    }
    public function getSalary (): int
    {
        return $this -> salary;
    }
}