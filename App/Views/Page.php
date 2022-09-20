<?php

namespace App\Views;

class Page extends View
{
    protected static string $filename = "App/Templates/page.html";
    private Menu $mainNavigation;

    public function __construct(array $data, Menu $mainNavigation)
    {
        $this->mainNavigation = $mainNavigation;
        $data['menu'] = $this->mainNavigation->getHTML();
        parent::__construct($data);
    }
}
