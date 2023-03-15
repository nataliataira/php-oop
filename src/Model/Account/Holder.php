<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Address;
use Alura\Bank\Model\Authenticable;
use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Person;

class Holder extends Person implements Authenticable
{
    private Address $adress;

    public function __construct(CPF $cpf, string $name, Address $adress)
    {
        parent::__construct($name, $cpf);
        $this->adress = $adress;
    }

    public function showsAdress(): Address
    {
        return ($this->adress);
    }

    public function canAuthenticate(string $password): bool
    {
        return ($password === 'abcd');
    }
}