<?php

namespace App\School;

class Students
{
    public string $firstname = "";
    public string $lastname = "";
    public int $age = 0;
    public int $level = 0;

    public function __construct(string $firstname, string $lastname, int $age, int $level)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->level = $level;
    }
}
