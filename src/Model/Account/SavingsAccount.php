<?php

namespace Alura\Bank\Model\Account;


class SavingsAccount extends Account
{
    protected function percentFee(): float
    {
        return (0.03);
    }
}