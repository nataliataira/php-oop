<?php

namespace Alura\Bank\Model;

/*
 * Class Adress
 * @package Alura\Bank\Model
 * @proterty-read string $city
 * @proterty-read string $neighborhood
 * @proterty-read string $street
 * @proterty-read string $number
 * 
*/

final class Address
{
    use PropertiesAccess;
    private string $city;
    private string $neighborhood;
    private string $street;
    private string $number;

    public function __construct(string $city, string $neighborhood, string $street, string $number)
    {
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->street = $street;
        $this->number = $number;
    }

    public function showsCity(): string
    {
        return ($this->city);
    }

    public function showsNeighborhood(): string
    {
        return ($this->neighborhood);
    }

    public function showsStreet(): string
    {
        return ($this->street);
    }

    public function showsNumber(): string
    {
        return ($this->number);
    }

    public function __toString()
    {
        return ("{$this->street}, {$this->number}, {$this->neighborhood}, {$this->city}");
    }

    public function __set(string $attributeName, string $assignedValue)
    {
        if ($attributeName === 'city')
            $this->$attributeName = $assignedValue;
    }
}