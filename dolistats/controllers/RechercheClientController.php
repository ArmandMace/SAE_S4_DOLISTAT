<?php

    namespace controllers;

    use yasmf\view;
    use yasmf\httpHelper;
    use services\APIService;

    class RechercheClientController
    {
        private APIService $apiService;

        public function __construct(APIService $apiService)
        {
            $this->apiService = $apiService;
        }

        public function index() : View
        {
            return new view("views/recherche_client");
        }

        public function ficheClient() : View
        {
            return new view("views/fiche_client");
        }
    }