<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Holder;

abstract class Account
 {
    private Holder $holder;
    protected float $balance;
    private static $accountsNumber = 0;

    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;

        self::$accountsNumber++;
    }

    public function __destruct()
    {
        self::$accountsNumber--;
    }

    public function withdrawals(float $withdrawalValue): void
    {
        $withdrawalFee = $withdrawalValue * $this->percentFee();
        $withdrawal = $withdrawalValue + $withdrawalFee;
        if ($withdrawal > $this->balance)
        {
            echo "Saldo indisponível";
            return;
        }
        $this->balance -= $withdrawal;
    }

    public function deposits(float $depositValue): void
    {
        if ($depositValue < 0)
        {
            echo "O valor precisa ser positivo";
            return;
        }
            $this->balance += $depositValue;
    }

    abstract protected function percentFee(): float;


    /// getters
    public function showsHolderName(): string
    {
        return ($this->holder->showsName());
    }

    public function showsHolderCpf(): string
    {
        return ($this->holder->showsCpf());
    }

    public function showsBalance(): float
    {
        return ($this->balance);
    }


    public static function showsAccountNumbers(): int
    {
        return (self::$accountsNumber);
    }
 }