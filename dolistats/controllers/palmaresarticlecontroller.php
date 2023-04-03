<?php

    namespace controllers;

    use yasmf\View;
    use yasmf\HttpHelper;
    use services\APIService;

    session_start();
    class palmaresarticlecontroller
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
            return new view("views/palmares_article");
        }

        public function top($dataJsonToSell, $dataJsonFacture, $dateMin, $dateMax) : Array
        {
            // Récupération des ID des produits vendus
            $IDArticleToSell = array();
            $DesignationArticleToSell = array();
            foreach($dataJsonToSell as $article) {
                array_push($IDArticleToSell, $article["id"]);
                array_push($DesignationArticleToSell, $article["label"]);
            }

            // Comparaison de date à date
            $dataJsonFactureFinal = array();
            foreach ($dataJsonFacture as $facture) {
                if ($facture["date_validation"] > $dateMin && $facture["date_validation"] < $dateMax) {
                    array_push($dataJsonFactureFinal, $facture);
                }
            }

            // Calcul de la somme des sorties pour chaques produits
            $finalSum = array_combine($IDArticleToSell, array_fill(0, count($IDArticleToSell), 0));
            foreach ($dataJsonFactureFinal as $facture) {
                //var_dump($facture["lines"]);
                foreach ($facture["lines"] as $lines) {
                    $finalSum[$lines["fk_product"]] += $lines["qty"]; //les quantités sont négatives
                }
            }
            $finalSum = array_combine($DesignationArticleToSell, $finalSum);

            //Tri croissant
            arsort($finalSum);
            return $finalSum;
        }

        /**
         * @return view
         */
        public function top10() : View
        {
            // Récupération date min et date max
            $dateMin = htmlspecialchars(httpHelper::getParam("dateMin"));
            $dateMinUnix = strtotime($dateMin);
            $dateMax = htmlspecialchars(httpHelper::getParam("dateMax"));
            $dateMaxUnix = strtotime($dateMax);
            var_dump($dateMinUnix, $dateMaxUnix);

            // Récupération des produits vendus
            $dataJsonToSell = $this->apiService->getArticleToSell();

            // Récupération des factures payés
            $dataJsonFacture = $this->apiService->getFacturesPaid();

            if ($dataJsonToSell == [] || $dataJsonFacture == [] || $dateMaxUnix == "" || $dateMinUnix == "") {
                // return la view vide
                return new view("views/palmares_article");
            } else {
                $finalSum = $this->top($dataJsonToSell, $dataJsonFacture, $dateMinUnix, $dateMaxUnix);

                // Conservation du TOP 10 des ventes
                $top10 = array_slice($finalSum, 0, 10, true);

                //set-var dans la vue
                $view = new view("views/palmares_article");
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
            var_dump($dateMinUnix, $dateMaxUnix);

            // Récupération des produits vendus
            $dataJsonToSell = $this->apiService->getArticleToSell();

            // Récupération des factures payés
            $dataJsonFacture = $this->apiService->getFacturesPaid();

            if ($dataJsonToSell == [] || $dataJsonFacture == [] || $dateMaxUnix == "" || $dateMinUnix == "") {
                // return la view vide
                return new view("views/palmares_article");
            } else {
                $finalSum = $this->top($dataJsonToSell, $dataJsonFacture, $dateMinUnix, $dateMaxUnix);

                // Conservation du TOP 20 des ventes
                $top10 = array_slice($finalSum, 0, 20, true);

                //set-var dans la vue
                $view = new view("views/palmares_article");
                $view->setVar("top", $top10);
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
            var_dump($dateMinUnix, $dateMaxUnix);

            $topx = intval(htmlspecialchars(httpHelper::getParam("topx")));

            // Récupération des produits vendus
            $dataJsonToSell = $this->apiService->getArticleToSell();

            // Récupération des factures payés
            $dataJsonFacture = $this->apiService->getFacturesPaid();

            if ($dataJsonToSell == [] || $dataJsonFacture == [] || $dateMaxUnix == "" || $dateMinUnix == "") {
                // return la view vide
                return new view("views/palmares_article");
            } else {
                $finalSum = $this->top($dataJsonToSell, $dataJsonFacture, $dateMinUnix, $dateMaxUnix);

                // Conservation du TOP x des ventes
                $top10 = array_slice($finalSum, 0, $topx, true);

                //set-var dans la vue
                $view = new view("views/palmares_article");
                $view->setVar("top", $top10);
                return $view;
            }
        }

    }
