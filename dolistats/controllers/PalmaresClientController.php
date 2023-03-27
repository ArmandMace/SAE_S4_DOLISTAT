<?php

    namespace controllers;

    use yasmf\view;
    use yasmf\httpHelper;
    use services\APIService;

    class PalmaresClientController
    {
        private APIService $apiService;

        public function __construct(APIService $apiService)
        {
            $this->apiService = $apiService;
        }

        public function index() : View
        {
            return new view("views/palmaresClient");
        }

    }