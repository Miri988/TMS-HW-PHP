<?php
class Driver extends Employee
{
    private int $dr_exp;
    private string $dr_cat;

    public function setDr_exp (int $dr_exp) 
    {
        $this -> dr_exp = $dr_exp;
    }
    public function getDr_exp (): int
    {
        return $this -> dr_exp;
    }

    public function setDr_cat (string $dr_cat)
    {
        $this -> dr_cat = $dr_cat;
    }
    public function getDr_cat (): string
    {
        return $this -> dr_cat;
    }
}