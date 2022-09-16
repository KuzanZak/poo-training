<?php

namespace App\Objects;

use App\Objects\Schools;

abstract class Person
{
    protected string $firstname = "";
    protected string $lastname = "";
    protected Schools $school;
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
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

    public function getSchool(): Schools
    {
        return $this->school;
    }
    public function setSchool(Schools $school): void
    {
        $this->school = $school;
    }

    // public function getSchoolName(): array
    // {
    //     $text = [];
    //     foreach ($this->getSchool() as $school) {
    //         $text[] = $school;
    //     }
    //     return $text;
    // }
}
