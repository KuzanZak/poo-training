<?php

namespace App\Objects;

use DateInterval;
use Datetime;
use App\Objects\Schools;

class Students extends Person
{
    // -----------------------------------------
    // Statics
    // -----------------------------------------
    private static string $dateFormat = "Y-m-d";
    private static string $introduction = "Bonjour, je m'appelle ##firstname## ##lastname## , j'ai ##age## ans et je vais à l'école ##school## en classe de ##grade##.<br>";

    public static function getDateFormat(): string
    {
        return self::$dateFormat;
    }
    public static function setDateFormat(string $dateFormat): void
    {
        self::$dateFormat = $dateFormat;
    }
    public static function getIntroduction(): string
    {
        return self::$introduction;
    }
    public static function setIntroduction(string $introduction): void
    {
        self::$introduction = $introduction;
    }

    // -----------------------------------------
    // Instances
    // -----------------------------------------

    protected string $firstname;
    protected string $lastname;
    private int $age;
    private Datetime $birthdate;
    private string $grade;
    protected Schools $school; //private Schools $school; utilisez la classe Schools en tant que type de propriété


    public function __construct(string $firstname, string $lastname, Datetime $birthdate, string $grade)
    {
        parent::__construct($firstname, $lastname);
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
        $search = [
            "firstname" => $this->getFirstname(),
            "lastname" => $this->getLastname(),
            "age" => $this->getAge(),
            "school" => $this->getSchool(),
            "grade" =>  $this->getAge()
        ];
        return str_replace(array_map(fn ($s) => "##$s##", array_keys($search)), array_values($search), self::getIntroduction());
        // return "Bonjour, je m'appelle " . $this->getFirstname() . " " . $this->getLastname() . ", j'ai " . $this->getAge() . " ans et je vais à l'école " . $this->getSchool() . " en classe de " . $this->getGrade() . ".<br>";
    }

    public function getAge(): int
    {
        // return $this->birthdate->diff(new Datetime())->format("%y");
        return $this->birthdate->diff(new Datetime())->y; //Meilleure option
    }
}
