<?php

namespace App\Objects;

class Highschool extends School
{
    private static array $levels = ["Seconde", "Première", "Terminale"];
    private static array $instancesList = [];

    public function __construct(string $name, string $city)
    {
        parent::__construct($name, $city);
        self::$instancesList[] = $this;
    }

    public static function getInstances(): array
    {
        return self::$instancesList;
    }

    public static function getLevels(): array
    {
        return self::$levels;
    }
    public static function getLevelsSchool(string $yesLevel)
    {
        foreach (self::$levels as $level) {
            if (in_array($yesLevel, self::$levels)) return "Le niveau scolaire (" . $yesLevel . ") est pris en charge dans cette école. <br>";
            return "Le niveau scolaire (" . $yesLevel . ")  n'est pas pris en charge dans cette école. <br>";
        }
    }
}
