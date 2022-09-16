<?php

namespace App\Objects;

use App\Objects\Schools;


class Teachers extends Person
{
    protected string $firstname;
    protected string $lastname;
    private array $subjects;
    protected Schools $school;

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
        // $array = [];
        // foreach ($this->subjects as $subject) {
        //     if ($subject !== $deleteSubject && !in_array($subject, $array)) $array[] = $subject;
        // }
        // $this->subjects = $array;

        // if (!in_array($removeSubject, $this->subjects)) return;
        // unset($this->subjects[array_search($removeSubject, $this->subjects)]);

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

    // public function getText(): string
    // {
    //     $search = [
    //         "firstname" => $this->getFirstname(),
    //         "lastname" => $this->getLastname(),
    //         "subjects" => $this->getSubjects(),
    //         "school" => $this->getSchool()
    //     ];
    //     return str_replace(array_map(fn ($s) => "##$s##", array_keys($search)), array_values($search), self::getIntroduction());
    //     // if ($this->disciplinesList === []) return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", je n'enseigne à l'échole " . $this->school . " mais j'enseigne aucune matières pour l'instant. <br>";
    //     // else return "Bonjour, je m'appelle " . $this->firstname . " " . $this->lastname . ", j'enseigne à l'échole " . $this->school . " les matières suivantes : " . implode(", ", $this->subjects) . ". <br>";
    // }
}
