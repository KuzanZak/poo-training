<?php

namespace App\Objects;

abstract class Person
{
    protected string $firstname = "";
    protected string $lastname = "";
    protected string $school = "";
    public function __construct(string $firstname, string $lastname, string $school)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
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

    public function getSchool(): string
    {
        return $this->school;
    }
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }
}
