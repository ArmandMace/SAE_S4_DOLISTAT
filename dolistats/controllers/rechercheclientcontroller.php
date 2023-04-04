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
            $nom = htmlspecialchars(httpHelper::getParam("name"));
            $ref = httpHelper::getParam("ref");
            $dataJson = $this->apiService->getClientByNom($nom);
            $dataJsonFactures = $this->apiService->getFacturesByClient($ref);
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);
            if ($dataJson == []) {
                return new view("views/recherche_client");
            } else {
                $view = new view("views/fiche_client");
                foreach ($dataJson as $item) {
                    $view->setVar("name", $item["name"]);
                    $view->setVar("loca", $item["address"]." ".$item["zip"]." ".$item["town"]);
                    $view->setVar("tel", $item["phone"]);
                    $view->setVar("alias", $item["name_alias"]);
                    $view->setVar("code_cli", $item["code_client"]);
                    $view->setVar("mail", $item["email"]);
                    $view->setVar("siren", $item["idprof1"]);
                    $view->setVar("siret", $item["idprof2"]);
                    $view->setVar("numTVA", $item["tva_intra"]);
                    $view->setVar("type", $item["typent_code"]);
                    $view->setVar("effectif", $item["effectif"]);
                    $view->setVar("identite_legale", $item["forme_juridique"]);
                    $view->setVar("capital", $item["capital"]);
                    $view->setVar("factures", $dataJsonFactures);
                    $view->setVar("session", $session);
                }
                return $view;
            }
        }
    }