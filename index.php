<?php
require_once "includes/_functions.php";

spl_autoload_register();

use App\Objects\Student;
use App\Objects\Elementary;
use App\Objects\Highschool;
use App\Objects\Middleschool;
use App\Views\Question;
use App\Views\Page;

$pageContent = '';

$marco = new Student("Marco", "Le phoenix", new Datetime("2004-07-19"), "Terminale", new Highschool("Kaigun School", "Tokyo"));
$aokiji = new Student("Aokiji", "Kuzan", new Datetime("2003-02-07"), "Licence", new Middleschool("Kaizoku School", "Kyoto"));
$q1 = new Question(
    [
        'number' => 1,
        'question' => "Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.<br>Définir toutes les propriétés à l'instanciation.<br>Créer 2 étudiants différents.",
        'answer' => 'Réponse avec un var_dump, var_export ne fonctionne pas :('
    ]
);
$pageContent .= $q1->getHTML();

$q2 = new Question(
    [
        'number' => 2,
        'question' => "Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.<br>Modifier le niveau scolaire des 2 élèves et les afficher.",
        'answer' => "" . $marco->getFirstname() . " : " . $marco->getGrade() . ", " . $aokiji->getFirstname() . " : " . $aokiji->getGrade() . "."
    ]
);
$pageContent .= $q2->getHTML();

$answer = $marco->showBirthdate() . "<br>" . $aokiji->showBirthdate() . "<br>";
Student::setDateFormat("l j F Y");
$answer .= $marco->showBirthdate() . "<br>" . $aokiji->showBirthdate() . "<br>";
$q3 = new Question(
    [
        'number' => 3,
        'question' => "Remplacer la propriété d'âge par la date de naissance de l'élève.<br>Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.",
        'answer' => $answer
    ]
);
$pageContent .= $q3->getHTML();

$q4 = new Question(
    [
        'number' => 4,
        'question' => "Donner la possibilité aux élèves de donner leur âge.<br>Afficher l'âge des 2 élèves.",
        'answer' => "" . $marco->getFirstname() . " : " . $marco->getAge() . " ans, " . $aokiji->getFirstname() . " : " . $aokiji->getAge() . " ans."
    ]
);
$pageContent .= $q4->getHTML();

$marco->setSchool(new Elementary("Art School", "Rome"));
$aokiji->setSchool(new Highschool("Piano School", "Londres"));
$q5 = new Question(
    [
        'number' => 5,
        'question' => "On veut aussi savoir le nom de l'école où va un élève.<br>Ajouter la propriété et ajouter la donnée sur les élèves.",
        'answer' => "" . $marco->getFirstname() . " : " . $marco->getSchool()->getName() . ", " . $aokiji->getFirstname() . " : " . $aokiji->getSchool()->getName() . "."
    ]
);
$pageContent .= $q5->getHTML();

$q6 = new Question(
    [
        'number' => 6,
        'question' => "Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
        \"Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.\".<br>Afficher la phrase de présentation des 2 élèves.",
        'answer' =>  $marco->introduceMySelf() . " " . $aokiji->introduceMySelf()
    ]
);
$pageContent .= $q6->getHTML();

$view = new Page(
    [
        'title' => 'POO - Des vues',
        'headerTitle' => 'POO - Des vues',
        'content' => $pageContent
    ]
);

$view->display();
exit;
