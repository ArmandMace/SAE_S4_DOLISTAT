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
            return new View("/views/login");
        }
    }

