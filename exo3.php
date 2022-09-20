<?php
require_once "includes/_functions.php";
require_once "includes/_config.php";

spl_autoload_register();

use App\Views\Question;
use App\Views\Page;
use App\Views\Menu;


$pageContent = '';

$q1 = new Question(
    [
        'number' => 1,
        'question' => "Créer les dossiers \"App/Objects\" et y ajouter un fichier PHP pour chacune des classes créées lors des exercices précédents.<br>Assurer le fonctionnement du code des exercices précédents.",
        'answer' => ''
    ]
);
$pageContent .= $q1->getHTML();

$q2 = new Question(
    [
        'number' => 2,
        'question' => "Ajouter les classes dans un namespace.<br>Automatiser l'import des fichiers en utilisant les namespaces.",
        'answer' => ''
    ]
);
$pageContent .= $q2->getHTML();

$q3 = new Question(
    [
        'number' => 3,
        'question' => "Mutualiser le code commun des 2 classes grâce à l'héritage.",
        'answer' => ''
    ]
);
$pageContent .= $q3->getHTML();

$menu = new Menu($pages);

$view = new Page(
    [
        'title' => 'POO - On s\'organise',
        'headerTitle' => 'POO - On s\'organise',
        'content' => $pageContent
    ],
    $menu
);
$view->display();
exit;
