<?php

class User {
    private string $name;
    protected int $age;

    public function setName (string $name)
    {
        $this -> name = $name;                 
    }
    public function setAge (int $age)
    {
        $this -> age = $age;
    }
    
    public function getName (): string
    {
        return $this -> name;                 
    }
    public function getAge (): int
    {
        return $this -> age;
    }

}