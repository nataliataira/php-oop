<?php

namespace Alura\Bank\Model\Employee;

class Developer extends Employee
{
    public function receivesPromotion()
    {
        return ($this->getsARaise($this->showsSalary() * 0.75));
    }

    public function calculatesBonus(): float
    {
        return (500.0);
    }
}