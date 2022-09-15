<?php

namespace App\Objects;

class Students extends Person
{
    protected string $firstname = "";
    protected string $lastname = "";
    private string $date = "";
    private int $level = 0;
    private int $age = 0;
    protected string $school = "";

    public function __construct(string $firstname, string $lastname, string $date, int $level, string $school)
    {
        parent::__construct($firstname, $lastname, $school);
        $this->date = $date;
        $this->level = $level;
    }

    public function getDate(): string
    {
        return $this->date;
    }
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getLevel(): int
    {
        return $this->level;
    }
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }


    public function getText(): string
    {
        return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", j'ai " . $this->age . " ans et je vais à l'école " . $this->school . " en classe de " . $this->level . "eme.<br>";
    }
}
