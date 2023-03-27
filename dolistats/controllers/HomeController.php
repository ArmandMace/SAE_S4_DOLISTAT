<?php
    namespace controllers;

    use yasmf\View;

    class HomeController
    {
        /**
         * @return View
         */
        public function index(): View
        {
            return new View("/views/url");
        }
    }

