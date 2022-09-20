<?php

namespace App\Objects;

class School
{
    // -----------------------------------------
    // Statics
    // -----------------------------------------
    protected static array $levels = [];

    // -----------------------------------------
    // Instances
    // -----------------------------------------
    protected string $name;
    protected string $city;

    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    // -----------------------------------------
    // Getters & Setters
    // -----------------------------------------

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getLevels(): array
    {
        return static::$levels;
    }

    // -----------------------------------------
    // Methods
    // -----------------------------------------

    public function getLevelsSchool(string $level)
    {
        if (in_array($level, static::$levels)) return "Le niveau scolaire (" . $level . ") est pris en charge dans l'école : " . static::getName() . ".<br>";
        return "Le niveau scolaire (" . $level . ")  n'est pas pris en charge dans l'école : " . static::getName() . ".<br>";
    }
}
