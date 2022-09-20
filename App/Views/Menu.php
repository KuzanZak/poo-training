<?php

namespace App\Views;

class Menu extends View
{
    protected static string $filename = "App/Templates/menu.html";
    public array $pages;


    public function __construct(array $pages)
    {
        $this->pages = $pages;
        $this->setData(['links' => $this->getHtmlLinks()]);
    }

    public function getHtmlLinks(): string
    {
        global $currentPage;
        $html = "";
        foreach ($this->pages as $page) {
            $class = "main-nav-link";
            if ($currentPage === $page["pageNumber"]) $class .= " active";
            $html .= "<li><a href=\"" . $page["href"] . "\" class = \"$class\">" . $page["pageTitle"] . "</a></li>";
        }

        return $html;
    }
}
// Des élèves
// Des profs
// On s'organise
// Des écoles
// Des vues