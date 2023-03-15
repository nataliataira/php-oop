<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Employee\Employee;

class BonusController
{
    private $totalBonuses = 0;

    public function addBonusOf(Employee $employee)
    {
        return ($this->totalBonuses += $employee->calculatesBonus());
    }

    public function showsTotalBonuses(): float
    {
        return ($this->totalBonuses);
    }
}