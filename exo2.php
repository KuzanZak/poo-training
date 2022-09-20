<?php
require_once "includes/_functions.php";
require_once "includes/_config.php";


spl_autoload_register();

use App\Objects\Teacher;
use App\Objects\Elementary;
use App\Objects\Middleschool;
use App\Objects\Highschool;
use App\Views\Question;
use App\Views\Page;
use App\Views\Menu;


$pageContent = '';

$barbeBlanche = new Teacher("Edward", "Newgate", ["piraterie", "respect"], new Elementary("Barbe Blanche School", "East Blue"));
$akainu = new Teacher("Akainu", "Sakazuki", [], new Elementary("Akainu School", "Marine Ford"));
$q1 = new Question(
    [
        'number' => 1,
        'question' => "Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.<br>
        Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.<br>
        Créer 2 professeurs différents.",
        'answer' => 'Réponse avec un var_dump, var_export ne fonctionne pas :\'('
    ]
);
$pageContent .= $q1->getHTML();

$barbeBlanche->setSchool(new Highschool("Jules Patrick", "Le Havre"));
$akainu->setSchool(new Middleschool("Anniesse Coulon", "Fécamps"));
$q2 = new Question(
    [
        'number' => 2,
        'question' => "Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.<br>
        Modifier les écoles des 2 professeurs.<br>
        Afficher les écoles des 2 professeurs.",
        'answer' => "Nouvelle école (" . $barbeBlanche->getFirstname() . ") : " . $barbeBlanche->getSchool()->getName() . " .<br>
        Nouvelle école (" . $akainu->getFirstname() . ") : " . $akainu->getSchool()->getName() . " .<br>"
    ]
);
$pageContent .= $q2->getHTML();

$barbeBlanche->addSubject("courage");
$barbeBlanche->addSubject("pouvoir");
$akainu->addSubject("fourberie");
$akainu->addSubject("trahison");
$barbeBlanche->removeSubject("respect");
$q3 = new Question(
    [
        'number' => 3,
        'question' => "Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.<br>
        Tester l'ajout, la suppression et l'affichage sur chacun des profs.",
        'answer' => "" . $barbeBlanche->getFirstname() . " : " . $barbeBlanche->getSubjectsToString() . ". <br>
        " . $akainu->getFirstname() . " : " . $akainu->getSubjectsToString() . ". <br>"
    ]
);
$pageContent .= $q3->getHTML();

$q4 = new Question(
    [
        'number' => 4,
        'question' => "Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
        \"Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.\".<br>
        Afficher la phrase de présentation des 2 profs.",
        'answer' => $barbeBlanche->introduceMySelf() . " " . $akainu->introduceMySelf()
    ]
);
$pageContent .= $q4->getHTML();

$menu = new Menu($pages);

$view = new Page(
    [
        'title' => 'POO - Des profs',
        'headerTitle' => 'POO - Des profs',
        'content' => $pageContent
    ],
    $menu
);

$view->display();
exit;
