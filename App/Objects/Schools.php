<?php

namespace App\Objects;

class Schools
{
    private string $name;
    private string $city;

    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }
}
