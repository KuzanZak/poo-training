<?php
require_once "includes/_functions.php";
require_once "includes/_config.php";

spl_autoload_register();

use App\Objects\Elementary;
use App\Objects\Middleschool;
use App\Objects\Highschool;
use App\Objects\School;
use App\Views\Question;
use App\Views\Page;
use App\Views\Menu;

$pageContent = '';

$kaigun = new School("Kaigun", "New World");
$kaizoku = new School("Kaizoku", "Marine Ford");
$q1 = new Question(
    [
        'number' => 1,
        'question' => "Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.<br>Créer 2 écoles et afficher leurs proprités.",
        'answer' => "Ecole 1 : " . $kaigun->getName() . ", Ville : " . $kaigun->getCity() . ". <br>Ecole 2 : " . $kaizoku->getName() . ", ville : " . $kaizoku->getCity() . ". <br>"
    ]
);
$pageContent .= $q1->getHTML();

$firstSchool = new Elementary("Basket School", "Houston");
$secondSchool = new Middleschool("Anime School", "Kyoto");
$thirdSchool = new Highschool("Manga School", "Tokyo");
$q2 = new Question(
    [
        'number' => 2,
        'question' => "Créer 3 classes correspondants aux 3 types d'école suivants : primaire, des collège et des lycée.<br>Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : \"CP\", \"CM2\", \"5ème\", \"Terminale\", ...).<br>Créer une école de chaque type.
        ",
        'answer' => "Primaire : " . $firstSchool->getName() . ", Ville : " . $firstSchool->getCity() . ". <br>Collège : " . $secondSchool->getName() . ", Ville : " . $secondSchool->getCity() . ". <br>Lycée : " . $thirdSchool->getName() . ", Ville : " . $thirdSchool->getCity() . ". <br>"
    ]
);
$pageContent .= $q2->getHTML();

$q3 = new Question(
    [
        'number' => 3,
        'question' => "Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveau scolaire.<br>Tester la méthode créée.",
        'answer' => $firstSchool->getLevelsSchool("CP") . "<br>" . $secondSchool->getLevelsSchool("CM2") . "<br>" . $thirdSchool->getLevelsSchool("Terminale")
    ]
);
$pageContent .= $q3->getHTML();

$q4 = new Question(
    [
        'number' => 4,
        'question' => "Remplacer les propriétés \"école\" des élèves et des professeurs par la classe créée.<br>Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.",
        'answer' => ''
    ]
);
$pageContent .= $q4->getHTML();

$menu = new Menu($pages);


$view = new Page(
    [
        'title' => 'POO - Des écoles',
        'headerTitle' => 'POO - Des écoles',
        'content' => $pageContent
    ],
    $menu
);

$view->display();
exit;
