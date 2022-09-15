<?php

namespace App\Objects;

class Teachers extends Person
{
    protected string $firstname = "";
    protected string $lastname = "";
    private array $disciplinesList = [];
    protected string $school = "";

    public function __construct(string $firstname, string $lastname, array $disciplinesList = null, string $school = null)
    {
        parent::__construct($firstname, $lastname, $school);
        $this->disciplinesList = $disciplinesList;
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

    public function getDisciplines(): array
    {
        return $this->disciplinesList;
    }

    public function setDisciplines(array $disciplinesList): void
    {
        $this->disciplinesList = $disciplinesList;
    }

    public function getText(): string
    {
        if ($this->disciplinesList === []) return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", je n'enseigne à l'échole " . $this->school . " mais j'enseigne aucune matières pour l'instant. <br>";
        else return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", j'enseigne à l'échole " . $this->school . " les matières suivantes : " . implode(", ", $this->disciplinesList) . ". <br>";
    }
}
