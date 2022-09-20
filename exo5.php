<?php
spl_autoload_register();

use App\Views\Question;
use App\Views\Page;


$pageContent = '';

$q1 = new Question(
    [
        'number' => 1,
        'question' => "Créer une classe permettant de gérer l'affichage d'un template HTML en lisant un fichier grâce à la fonction file_get_contents().",
        'answer' => ''
    ]
);
$pageContent .= $q1->getHTML();

$q2 = new Question(
    [
        'number' => 2,
        'question' => "Créer une classe permettant de gérer l'affichage des pages de ce mini-site.",
        'answer' => ''
    ]
);
$pageContent .= $q2->getHTML();

$q3 = new Question(
    [
        'number' => 3,
        'question' => "Créer une classe permettant de gérer le menu de navigation de ce site.",
        'answer' => ''
    ]
);
$pageContent .= $q3->getHTML();

$q4 = new Question(
    [
        'number' => 4,
        'question' => "Créer une classe permettant de gérer l'affichage des questions sur ce site.",
        'answer' => ''
    ]
);
$pageContent .= $q4->getHTML();

$view = new Page(
    [
        'title' => 'POO - Des vues',
        'headerTitle' => 'POO - Des vues',
        'content' => $pageContent
    ]
);

$view->display();
exit;
?>