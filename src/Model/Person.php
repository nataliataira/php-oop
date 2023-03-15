<?php

namespace Alura\Bank\Model;

abstract class Person
{
    use PropertiesAccess;
    protected string $name;
    public CPF $cpf;

    public function __construct(string $name, CPF $cpf)
    {
        $this->validatesName($name);
        $this->name = $name;
        $this->cpf = $cpf;
    }

    final protected function validatesName(string $name): void
    {
        if (strlen($name) < 5)
        {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function showsName(): string
    {
        return ($this->name);
    }

    public function showsCpf(): string
    {
        return ($this->cpf->showsNumber());
    }
}