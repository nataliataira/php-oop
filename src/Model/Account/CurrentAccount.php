<?php

namespace Alura\Bank\Model\Account;

class CurrentAccount extends Account
{
    protected function percentFee(): float
    {
        return (0.05);
    }

    public function transfers(float $transferValue, Account $destinationAccount): void
    {
        if ($transferValue > $this->balance)
        {
            echo "Saldo Indisponível";
            return;
        }
        $this->withdrawals($transferValue);
        $destinationAccount->deposits($transferValue);
    }
}