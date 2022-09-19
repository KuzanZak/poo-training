<?php

namespace App\Objects;

use App\Objects\School;


class Teacher extends Person
{
    // -----------------------------------------
    // Statics
    // -----------------------------------------
    protected static string $introduction = "Bonjour, je m'appelle ##firstname## ##lastname## et j'enseigne à l'école ##school##, les matières suivantes : ##subjects##.<br>";

    // -----------------------------------------
    // Instances
    // -----------------------------------------

    private array $subjects;

    public function __construct(string $firstname, string $lastname, array $subjects = null, string $school = null)
    {
        parent::__construct($firstname, $lastname, $school);
        $this->subjects = $subjects;
    }

    public function addSubject(string $newSubject): void
    {
        if (in_array($newSubject, $this->subjects)) return;
        $this->subjects[] = $newSubject;
    }
    public function removeSubject(string $removeSubject): void
    {
        $this->subjects = array_filter($this->subjects, fn ($s) => $s !== $removeSubject);
    }


    public function getSubjects(): array
    {
        return $this->subjects;
    }

    public function setSubjects(array $subjects): void
    {
        $this->subjects = $subjects;
    }
    public function getSubjectsToString(): string
    {
        return implode(", ", $this->subjects);
    }

    public function introduceMySelf(): string
    {
        return self::buildIntroduction([
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'subjects' => $this->getSubjectsToString(),
            'school' => $this->getSchool()->getName(),
        ]);
    }


    // if ($this->disciplinesList === []) return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", je n'enseigne à l'échole " . $this->school . " mais j'enseigne aucune matières pour l'instant. <br>";
    //     // else return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", j'enseigne à l'échole " . $this->school . " les matières suivantes : " . implode(", ", $this->subjects) . ". <br>";
    // }
}
