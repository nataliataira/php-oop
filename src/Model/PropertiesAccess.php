<?php

namespace Alura\Bank\Model;

trait PropertiesAccess
{
    public function __get(string $attributeName)
    {
        $method = 'shows' . ucfirst($attributeName);
        return ($this->$method());
    }
}