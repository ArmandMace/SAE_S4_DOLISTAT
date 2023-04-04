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
         * Affichage de base de la vue login
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
         * Fonction de connexion à l'application, enregistre l'url de connexion utilisé si nouvelle et pas dans url.ini
         * @return View Acceuil if login information are correct
         * @return View Login if login information are incorrect
         */
        public function connexion() : View
        {
            // Récupération des information de connexion
            $login = htmlspecialchars(HttpHelper::getParam("login"));
            $password = htmlspecialchars(HttpHelper::getParam("password"));
            $url = htmlspecialchars(httpHelper::getParam("url"));
            $newUrl = false;
            // utilise l'url rentrée à la main si cette option à été choisie
            if ($url == "autre") {
                $url = HttpHelper::getParam("autreURL");
                $newUrl = true;
            }
            $listeUrl = parse_ini_file('url.ini', true, INI_SCANNER_RAW); // initialisation de la liste des url à renvoyer si besoin
            $dataJson = $this->apiService->login($login, $password, $url); // appel de l'api depuis le service

            if($dataJson == []) { // Si Json est vide, info de connexion éronnée -> renvoie sur la page de login
                $view = new View("views/login");
                $view->setVar("listeUrl", $listeUrl['listeUrl']);
                $view->setVar("login", $login);
            } else { // Json non vide, info de connexion validées par l'api -> enregistrement des info renvoyées par l'api dans la session
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
                // Ajout de l'url dans url.ini si entrée à la main
                if ($newUrl == true) {
                    $this->ajoutUrl($url);
                }
                $view = new View("views/accueil");
            }
            return $view;
        }

        /**
         * @return View
         */
        public function deconnexion() : View
        {
            // Reset de session.json
            file_put_contents('session.json', '{}');
            $url = parse_ini_file('url.ini', true, INI_SCANNER_RAW);
            $view = new View("views/login");
            $view->setVar("listeUrl", $url['listeUrl']);
            return $view;
        }

        /**
         * Fonction d'ajout de l'url dans le fichier url.ini
         * Si url deja presente -> return false
         * Si url pas dans le fichier -> return true + inscrit l'url dans le fichier à la suite de la précédente
         * @param $url
         * @return bool|void
         */
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