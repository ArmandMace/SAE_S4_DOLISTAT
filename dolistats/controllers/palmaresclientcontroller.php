<?php
    namespace controllers;

    use yasmf\View;
    use yasmf\HttpHelper;
    use services\APIService;

    session_start();

    class palmaresclientcontroller
    {
        private apiservice $apiService;

        public function __construct(apiservice $apiService)
        {
            $this->apiService = $apiService;
        }

        /**
         * @return view
         */
        public function index() : View
        {
            return new view("views/palmares_client");
        }

        /**
         * @return view
         */
        public function top10() : View
        {
            return new view("views/palmares_client");
        }

        /**
         * @return view
         */
        public function top20() : View
        {
            return new view("views/palmares_client");
        }

        /**
         * @return view
         */
        public function topx() : View
        {
            return new view("views/palmares_client");
        }

    }