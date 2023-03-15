<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authenticable;

class Manager extends Employee implements Authenticable
{
    public function calculatesBonus(): float
    {
        return ($this->showsSalary());
    }

    public function canAuthenticate(string $password): bool
    {
        return ($password === '4321');
    }
}