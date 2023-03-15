<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Person;
use Alura\Bank\Model\CPF;

abstract class Employee extends Person
{
    private float $salary;

    public function __construct(string $name, CPF $cpf, float $salary)
    {
        parent::__construct($name, $cpf);
        $this->salary = $salary;
    }

    public function changeName($name): void
    {
        $this->validatesName($name);
        $this->name = $name;
    }

    public function getsARaise(float $raiseValue): void
    {
        if ($raiseValue < 0)
        {
            echo "Aumento deve ser possitivo";
            return;
        }
        $this->salary += $raiseValue;
    }

    public function showsSalary(): float
    {
        return ($this->salary);
    }

    abstract public function calculatesBonus(): float;
}