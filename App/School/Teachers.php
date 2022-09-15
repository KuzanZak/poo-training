<?php

namespace App\School;

class Teachers
{
    private string $firstname = "";
    private string $lastname = "";
    private array $disciplinesList = [];
    private string $school = "";

    public function __construct(string $firstname, string $lastname, array $disciplinesList = null, string $school = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->disciplinesList = $disciplinesList;
        $this->school = $school;
    }

    public function addDiscipline(string $newDiscipline): void
    {
        $this->disciplinesList[] = $newDiscipline;
    }
    public function deleteDiscipline(string $deleteDiscipline): void
    {
        $array = [];
        foreach ($this->disciplinesList as $discipline) {
            if ($discipline !== $deleteDiscipline && !in_array($discipline, $array)) $array[] = $discipline;
        }
        $this->disciplinesList = $array;
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

    public function getDisciplines(): array
    {
        return $this->disciplinesList;
    }
    public function setDisciplines(array $disciplinesList): void
    {
        $this->disciplinesList = $disciplinesList;
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

        return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", j'enseigne à l'échole " . $this->school . " les matières suivantes : " . implode(", ", $this->disciplinesList) . ". <br>";
    }
}
