<?php

namespace App\Objects;

class School
{
    protected string $name;
    protected string $city;

    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    // public function getCity(): string
    // {
    //     return $this->lastname;
    // }
    // public function setCity(string $lastname): void
    // {
    //     $this->lastname = $lastname;
    // }
}
