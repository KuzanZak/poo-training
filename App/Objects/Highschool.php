<?php

namespace App\Objects;

class Highschool extends School
{
    // -----------------------------------------
    // Statics
    // -----------------------------------------

    protected static array $levels = ["Seconde", "Première", "Terminale"];
    private static array $instancesList = [];

    public static function getInstances(): array
    {
        return self::$instancesList;
    }

    // -----------------------------------------
    // Instances
    // -----------------------------------------
    public function __construct(string $name, string $city)
    {
        parent::__construct($name, $city);
        self::$instancesList[] = $this;
    }
}
