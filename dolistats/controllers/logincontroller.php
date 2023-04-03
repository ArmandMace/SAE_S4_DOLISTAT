<?php
    namespace controllers;

    use yasmf\View;
    use yasmf\HttpHelper;
    use services\APIService;

    session_start();
    class logincontroller
    {
        private apiservice $apiService;

        public function __construct(apiservice $apiService)
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
                // Mise en place de la variable session.json
                file_put_contents('session.json', '{}');
                $session = json_decode(file_get_contents('session.json'), true);

                // affectation des variables sessions
                $session["sessionId"] = session_id();       // = $_SESSION["sessionId"] = session_id()
                $_SESSION["identifiant"] = $login;          // = $_SESSION["identifiant"] = $login
                $data = $dataJson->success;
                $session["token"] = $data->token;           // = $_SESSION["token"] = $data->token;
                $session["url"] = $url;                    // = $_SESSION["url"] = $url;

                //update de session.json avec les variables associés
                file_put_contents('session.json', json_encode($session));

                $view = new View("views/accueil");
            }
            return $view;

        }

        public function deconnexion() : View
        {
            // Reset de session.json
            file_put_contents('session.json', '{}');
            return new View("views/login");
        }

    }