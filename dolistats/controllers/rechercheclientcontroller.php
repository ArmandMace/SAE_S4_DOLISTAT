<?php

    namespace controllers;

    use yasmf\View;
    use yasmf\HttpHelper;
    use services\APIService;
    session_start();
    class rechercheclientcontroller
    {
        private apiservice $apiService;

        public function __construct(apiservice $apiService)
        {
            $this->apiService = $apiService;
        }

        public function index() : View
        {
            return new view("views/recherche_client");
        }

        public function rechercheClient(): View
        {
            $designation = htmlspecialchars(httpHelper::getParam("designationClient"));
            $dataJson = $this->apiService->getClient($designation);
            if ($dataJson == [] OR $designation == '') {
                return new view("views/recherche_client");
            } else {
                $view = new view("views/recherche_client");
                $view->setVar("clients", $dataJson);
                return $view;
            }
        }

        public function ficheClient() : View
        {
            return new view("views/fiche_client");
        }
    }