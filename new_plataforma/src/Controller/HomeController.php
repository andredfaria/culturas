<?php 

namespace Code\controller;

use Code\View\View;

class HomeController 
{
    public function index()
    {   
        
        $view = new View('site/index.phtml');

        $view->name = "André de Faria";

        return $view->render();
    }
}