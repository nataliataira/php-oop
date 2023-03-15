<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Authenticable;

class Authenticator
{
    public function tryLogin(Authenticable $authenticable, string $password): void
    {
        if ($authenticable->canAuthenticate($password))
            echo "Ok. Usuário logado no sistema". PHP_EOL;
        else
            echo "Ops, senha incorreta." . PHP_EOL;
    }
}