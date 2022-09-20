<?php

namespace App\Objects;

use DateInterval;
use Datetime;
use App\Objects\School;

class Student extends Person
{
    // -----------------------------------------
    // Statics
    // -----------------------------------------
    private static string $dateFormat = "Y-m-d";
    protected static string $introduction = "Bonjour, je m'appelle ##firstname## ##lastname## , j'ai ##age## ans et je vais à l'école ##school## en classe de ##grade##.<br>";

    public static function getDateFormat(): string
    {
        return self::$dateFormat;
    }
    public static function setDateFormat(string $dateFormat): void
    {
        self::$dateFormat = $dateFormat;
    }

    // -----------------------------------------
    // Instances
    // -----------------------------------------
    private Datetime $birthdate;
    private string $grade;

    public function __construct(string $firstname, string $lastname, Datetime $birthdate, string $grade, ?School $school)
    {
        parent::__construct($firstname, $lastname, $school);
        $this->birthdate = $birthdate;
        $this->grade = $grade;
    }

    public function getBirthdate(): Datetime
    {
        return $this->birthdate;
    }
    public function setBirthdate(Datetime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
    public function showBirthdate(): string
    {
        return $this->getBirthdate()->format(self::$dateFormat);
    }

    public function getGrade(): string
    {
        return $this->grade;
    }
    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }

    public function introduceMySelf(): string
    {
        return self::buildIntroduction([
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'age' => $this->getAge(),
            'school' => $this->getSchool()->getName(),
            'grade' =>  $this->getGrade()
        ]);
    }

    public function getAge(): int
    {
        // return $this->birthdate->diff(new Datetime())->format("%y");
        return $this->birthdate->diff(new Datetime())->y; //Meilleure option
    }
}
