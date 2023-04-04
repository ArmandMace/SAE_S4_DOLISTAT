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
         * @param $dataJsonClient
         * @param $dataJsonMvt
         * @return Array
         */
        public function top($dataJsonClient, $dataJsonFacture, $dateMin, $dateMax) : Array
        {
            // Récupération des ID des produits vendus
            $IdClient = array();
            $NomClient = array();
            foreach($dataJsonClient as $client) {
                array_push($IdClient, $client["ref"]);
                array_push($NomClient, $client["name"]);
            }

            // Comparaison de date à date
            $dataJsonFactureFinal = array();
            foreach ($dataJsonFacture as $facture) {
                if ($facture["date_validation"] > $dateMin && $facture["date_validation"] < $dateMax) {
                    array_push($dataJsonFactureFinal, $facture);
                }
            }

            // Calcul de la somme des sorties pour chaques produits
            $finalSum = array_combine($IdClient, array_fill(0, count($IdClient), 0));
            foreach ($dataJsonFactureFinal as $facture) {
                $finalSum[$facture["socid"]] += $facture["total_ttc"];
            }
            $finalSum = array_combine($NomClient, $finalSum);

            //Tri croissant
            arsort($finalSum);
            return $finalSum;
        }

        /**
         * @return View
         */
        public function top10() : View
        {
            // Récupération date min et date max
            $dateMin = htmlspecialchars(httpHelper::getParam("dateMin"));
            $dateMinUnix = strtotime($dateMin);
            $dateMax = htmlspecialchars(httpHelper::getParam("dateMax"));
            $dateMaxUnix = strtotime($dateMax);


            // Récupération des clients
            $dataJsonClient = $this->apiService->getClient("");

            // Récupération des factures payés
            $dataJsonFacture = $this->apiService->getFacturesPaid();

            if ($dataJsonClient == [] || $dataJsonFacture == [] || $dateMaxUnix == "" || $dateMinUnix == "") {
                // return la view vide
                return new view("views/palmares_client");
            } else {
                $finalSum = $this->top($dataJsonClient, $dataJsonFacture, $dateMinUnix, $dateMaxUnix);

                // Conservation du TOP 10 des CA
                $top10 = array_slice($finalSum, 0, 10, true);

                //set-var dans la vue
                $view = new view("views/palmares_client");
                $view->setVar("top", $top10);
                return $view;
            }
        }

        /**
         * @return view
         */
        public function top20() : View
        {
            // Récupération date min et date max
            $dateMin = htmlspecialchars(httpHelper::getParam("dateMin"));
            $dateMinUnix = strtotime($dateMin);
            $dateMax = htmlspecialchars(httpHelper::getParam("dateMax"));
            $dateMaxUnix = strtotime($dateMax);


            // Récupération des clients
            $dataJsonClient = $this->apiService->getClient("");

            // Récupération des factures payés
            $dataJsonFacture = $this->apiService->getFacturesPaid();

            if ($dataJsonClient == [] || $dataJsonFacture == [] || $dateMaxUnix == "" || $dateMinUnix == "") {
                // return la view vide
                return new view("views/palmares_client");
            } else {
                $finalSum = $this->top($dataJsonClient, $dataJsonFacture, $dateMinUnix, $dateMaxUnix);

                // Conservation du TOP 20 des CA
                $top20 = array_slice($finalSum, 0, 20, true);

                //set-var dans la vue
                $view = new view("views/palmares_client");
                $view->setVar("top", $top20);
                return $view;
            }
        }

        /**
         * @return view
         */
        public function topx() : View
        {
            // Récupération date min et date max
            $dateMin = htmlspecialchars(httpHelper::getParam("dateMin"));
            $dateMinUnix = strtotime($dateMin);
            $dateMax = htmlspecialchars(httpHelper::getParam("dateMax"));
            $dateMaxUnix = strtotime($dateMax);

            $topx = intval(htmlspecialchars(httpHelper::getParam("topx")));

            // Récupération des clients
            $dataJsonClient = $this->apiService->getClient("");

            // Récupération des factures payés
            $dataJsonFacture = $this->apiService->getFacturesPaid();

            if ($dataJsonClient == [] || $dataJsonFacture == [] || $dateMaxUnix == "" || $dateMinUnix == "") {
                // return la view vide
                return new view("views/palmares_client");
            } else {
                $finalSum = $this->top($dataJsonClient, $dataJsonFacture, $dateMinUnix, $dateMaxUnix);

                // Conservation du TOP x des CA
                $topx = array_slice($finalSum, 0, $topx, true);

                //set-var dans la vue
                $view = new view("views/palmares_client");
                $view->setVar("top", $topx);
                return $view;
            }
        }
    }