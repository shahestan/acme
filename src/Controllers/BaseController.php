<?php

    namespace Acme\Controllers;

    use duncan3dc\Laravel\BladeInstance;

    class BaseController
    {

        /** protected $loader;
        protected $twig;

        public function __construct()
        {
            $this->loader = new \Twig\Loader\FilesystemLoader(dirname(dirname(__DIR__)) . '/views');
            $this->twig = new \Twig\Environment($this->loader, [
                'cache' => false,
                'debug' => true
            ]);

        }*/

        protected $blade;

        public function __construct()
        {
            $this->blade = new BladeInstance(dirname(dirname(__DIR__)) . '/views', dirname(dirname(__DIR__)) . '/cache/views');
        }

    }
