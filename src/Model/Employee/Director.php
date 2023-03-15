<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authenticable;

class Director extends Employee implements Authenticable
{
    public function calculatesBonus(): float
    {
        return ($this->showsSalary() * 2);
    }

    public function canAuthenticate(string $password): bool
    {
        return ($password === '1234');
    }
}