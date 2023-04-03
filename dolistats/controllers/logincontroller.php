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
            $url = parse_ini_file('url.ini', true, INI_SCANNER_RAW);
            $view = new View("views/login");
            $view->setVar("listeUrl", $url);
            return $view;
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
            $newUrl = false;
            if ($url == "autre") {
                $url = HttpHelper::getParam("autreURL");
                $newUrl = true;
            }
            $listeUrl = parse_ini_file('url.ini', true, INI_SCANNER_RAW);
            $dataJson = $this->apiService->login($login, $password, $url);

            if($dataJson == []) {
                $view = new View("views/login");
                $view->setVar("listeUrl", $listeUrl['listeUrl']);
                $view->setVar("login", $login);
            } else {
                // Mise en place de la variable session.json
                file_put_contents('session.json', '{}');
                $session = json_decode(file_get_contents('session.json'), true);

                // affectation des variables sessions
                $session["sessionId"] = session_id();       // = $_SESSION["sessionId"] = session_id()
                $session["identifiant"] = $login;          // = $_SESSION["identifiant"] = $login
                $data = $dataJson->success;
                $session["token"] = $data->token;           // = $_SESSION["token"] = $data->token;
                $session["url"] = $url;                    // = $_SESSION["url"] = $url;

                //update de session.json avec les variables associés
                file_put_contents('session.json', json_encode($session));
                if ($newUrl == true) {
                    $this->ajoutUrl($url);
                }
                $view = new View("views/accueil");
            }
            return $view;

        }

        public function deconnexion() : View
        {
            // Reset de session.json
            file_put_contents('session.json', '{}');
            $url = parse_ini_file('url.ini', true, INI_SCANNER_RAW);
            $view = new View("views/login");
            $view->setVar("listeUrl", $url['listeUrl']);
            return $view;
        }

        public function ajoutUrl($url) {
            $file = 'url.ini';
            // Charge le fichier .ini dans un tableau associatif
            $config = parse_ini_file($file, true);
            // Vérifie si l'URL n'est pas déjà présente dans le fichier
            if (in_array($url, $config['listeUrl'])) {
                return false;
            }
            // Ajoute l'URL à la fin de la liste
            $config['listeUrl']['url'.(count($config['listeUrl'])+1)] = $url;
            // Convertit le tableau associatif en chaîne de caractères .ini
            $ini_str = '';
            foreach ($config as $section => $values) {
                $ini_str .= "[$section]\n";
                foreach ($values as $key => $value) {
                    $ini_str .= "$key = \"$value\"\n";
                }
            }
            // Écrit le fichier .ini mis à jour
            if (!file_put_contents($file, $ini_str)) {
                die("Impossible d'écrire dans le fichier $file.");
            }
            return true;
        }

    }