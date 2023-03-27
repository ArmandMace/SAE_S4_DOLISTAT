<?php
    namespace controllers;

    use yasmf\view;
    use yasmf\httpHelper;
    use services\APIService;

    class LoginController
    {
        private APIService $apiService;

        public function __construct(APIService $apiService)
        {
            $this->apiService = $apiService;
        }

        /**
         * @return view login
         */
        public function index() : View
        {
            return new View("views/login");
        }

        /**
         * Fonction de connexion à l'application
         * @return View Acceuil if login information are correct
         * @return View Login if login information are incorrect
         */
        public function connexion() : View
        {
            $login = htmlspecialchars(HttpHelper::getParam("login"));
            $password = htmlspecialchars(HttpHelper::getParam("password"));
            $url = htmlspecialchars(httpHelper::getParam("url"));
            $dataJson = $this->apiService->login($login, $password, $url);

            if($dataJson == []) {
                $view = new View("views/login");
                $view->setVar("login", $login);
            } else {
                $_SESSION["identifiant"] = $login;
                $data = $dataJson->success;
                $_SESSION["token"] = $data->token;
                $_SESSION["url"] = $url;
                var_dump($_SESSION);
                $view = new View("views/accueil");
            }
            return $view;

        }

        public function deconnexion() : View
        {
            session_start();
            session_destroy();
            return new View("views/login");
        }

    }