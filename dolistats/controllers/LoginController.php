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
         * Fonction de connexion à l'application
         * @return View Acceuil if login information are correct
         * @return View Login if login information are incorrect
         */
        public function connexion() : View
        {
            $login = HttpHelper::getParam("login");
            $password = HttpHelper::getParam("password");
            $infoConnexion = $this->apiService->login($login, $password);

            if($infoConnexion == []) {
                $view = new View("views/login");
                $view->setVar("login", $login);
            } else {
                session_start();
                $_SESSION["identifiant"] = $login;
                $_SESSION["token"] = $infoConnexion->{"token"};
                $view = new View("views/accueil");
            }
            return $view;

        }

    }