<?php

namespace App\Objects;

class Elementary extends School
{
    // -----------------------------------------
    // Statics
    // -----------------------------------------

    protected static array $levels = ["CP", "CE1", "CE2", "CM1", "CM2"];
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
