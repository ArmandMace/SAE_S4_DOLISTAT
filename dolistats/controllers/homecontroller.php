<?php
    namespace controllers;

    use yasmf\View;

    class homecontroller
    {
        /**
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

