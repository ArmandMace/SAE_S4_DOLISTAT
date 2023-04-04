<?php
    namespace controllers;

    use yasmf\View;

    session_start();

    class homecontroller
    {
        /**
         * Fonction de base qui affiche la vue de connexion au lancement de l'application
         * @return View
         */
        public function index(): View
        {
            $url = parse_ini_file('url.ini', true);
            $view = new View("views/login");
            $view->setVar("listeUrl", $url['listeUrl']);
            return $view;
        }
    }

