<?php
require_once "includes/_functions.php";
spl_autoload_register();

use App\Objects\Elementary;
use App\Objects\Middleschool;
use App\Objects\Highschool;
use App\Objects\School;
use App\Views\Question;
use App\Views\Page;

$pageContent = '';

$q1 = new Question(
    [
        'number' => 1,
        'question' => "Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.<br>Créer 2 écoles et afficher leurs proprités.",
        'answer' => ''
    ]
);
$pageContent .= $q1->getHTML();

$q2 = new Question(
    [
        'number' => 2,
        'question' => "Créer 3 classes correspondants aux 3 types d'école suivants : primaire, des collège et des lycée.<br>Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : \"CP\", \"CM2\", \"5ème\", \"Terminale\", ...).<br>Créer une école de chaque type.
        ",
        'answer' => ''
    ]
);
$pageContent .= $q2->getHTML();

$q3 = new Question(
    [
        'number' => 3,
        'question' => "Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveau scolaire.<br>Tester la méthode créée.",
        'answer' => ''
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des écoles</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des écoles</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.
                <br>
                Créer 2 écoles et afficher leurs proprités.
            </p>
            <div class="exercice-sandbox">
                <?php
                $kaigun = new School("Kaigun", "New World");
                $kaizoku = new School("Kaizoku", "Marine Ford");
                echo "Ecole 1 : " . $kaigun->getName() . ", ville : " . $kaigun->getCity() . ". <br>";
                echo "Ecole 2 : " . $kaizoku->getName() . ", ville : " . $kaizoku->getCity() . ". <br>";
                ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer 3 classes correspondants aux 3 types d'école suivants : primaire, des collège et des lycée.
                <br>
                Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : "CP", "CM2", "5ème", "Terminale", ...).
                <br>
                Créer une école de chaque type.
            </p>
            <div class="exercice-sandbox">
                <?php
                $firstSchool = new Elementary("Basket School", "Houston");
                $secondSchool = new Middleschool("Anime School", "Kyoto");
                $thirdSchool = new Highschool("Manga School", "Tokyo");
                echo "Primaire : " . $firstSchool->getName() . ", ville : " . $firstSchool->getCity() . ". <br>";
                echo "Collège : " . $secondSchool->getName() . ", ville : " . $secondSchool->getCity() . ". <br>";
                echo "Lycée : " . $thirdSchool->getName() . ", ville : " . $thirdSchool->getCity() . ". <br>";
                var_dump($firstSchool->getLevels());
                ?>
            </div>
        </section>


        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveau scolaire.
                <br>
                Tester la méthode créée.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo $firstSchool->getLevelsSchool("CP");
                echo $secondSchool->getLevelsSchool("CM2");
                echo $thirdSchool->getLevelsSchool("Terminale");
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Remplacer les propriétés "école" des élèves et des professeurs par la classe créée.
                <br>
                Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.
            </p>
            <div class="exercice-sandbox">

            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>

</html>