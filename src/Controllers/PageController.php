<?php

    namespace Acme\Controllers;

    use duncan3dc\Laravel\BladeInstance;

    class PageController extends BaseController
    {

        public function getShowHomePage()
        {
            //require dirname(dirname(__DIR__)) . '/views/home.php';
            //echo $this->twig->render('home.html');
            // $_SESSION['test'] = '<strong>Salam!</strong>';
            // echo $this->blade->render("home", ['test' => 'Hello Again.']);

            echo $this->blade->render("home");
        }

    }
