<?php

    namespace controllers;

    use yasmf\view;
    use yasmf\httpHelper;
    use services\apiservice;

    class palmaresclientcontroller
    {
        private apiservice $apiService;

        public function __construct(apiservice $apiService)
        {
            $this->apiService = $apiService;
        }

        public function index() : View
        {
            return new view("views/palmaresClient");
        }

    }