<?php

namespace App\School;

class Students
{
    private string $firstname = "";
    private string $lastname = "";
    private string $date = "";
    private int $level = 0;
    private int $age = 0;
    private string $school = "";

    public function __construct(string $firstname, string $lastname, string $date, int $level, string $school)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->date = $date;
        $this->level = $level;
        $this->school = $school;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
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

    public function getSchool(): string
    {
        return $this->school;
    }
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function getText(): string
    {

        return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", j'ai " . $this->age . " ans et je vais à l'école " . $this->school . " en classe de " . $this->level . "eme.<br>";
    }
}
