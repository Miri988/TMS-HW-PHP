<?php
class Programmer extends Employee
{
    private array $langs;

    public function setLangs (array $langs)
    {
       $this -> langs = $langs;
    }
    public function getLangs (): array
    {
        return $this -> langs;
    }
}