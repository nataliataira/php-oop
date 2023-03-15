<?php

namespace Alura\Bank\Model\Employee;

class VideoEditor extends Employee
{
    public function calculatesBonus(): float
    {
        return (600);
    }
}