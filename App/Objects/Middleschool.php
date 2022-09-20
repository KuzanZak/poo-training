<?php

namespace App\Objects;

class Middleschool extends School
{

    // -----------------------------------------
    // Statics
    // -----------------------------------------
    protected static array $levels = ["6ème", "5ème", "4ème", "3ème"];
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
