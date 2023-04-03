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

        /**
         * @param $dataJsonToSell
         * @param $dataJsonMvt
         * @return Array
         */
        public function top($dataJsonToSell, $dataJsonMvt) : Array
        {
            // Récupération des ID des produits vendus
            $IDArticleToSell = array();
            $DesignationArticleToSell = array();
            foreach($dataJsonToSell as $article) {
                array_push($IDArticleToSell, $article["id"]);
                array_push($DesignationArticleToSell, $article["label"]);
            }

            //Comparaison des IDs des mvt avec les IDs des produits vendus + si ce sont des sorties
            $dataJsonMvtFinal = array();
            foreach ($dataJsonMvt as $mvt) {
                if ( in_array($mvt["product_id"], $IDArticleToSell) && $mvt["type"] == "2") {
                    array_push($dataJsonMvtFinal, $mvt);
                }
            }

            // Calcul de la somme des sorties pour chaques produits
            $finalSum = array_combine($IDArticleToSell, array_fill(0, count($IDArticleToSell), 0));
            foreach ($dataJsonMvtFinal as $mvt) {
                $finalSum[$mvt["product_id"]] -= $mvt["qty"]; //les q uantités sont négatives
            }
            $finalSum = array_combine($DesignationArticleToSell, $finalSum);

            //Tri croissant
            arsort($finalSum);
            return $finalSum;
        }

        /**
         * @return View
         */
        public function top10() : View
        {
            // Récupération des produits vendus
            $dataJsonToSell = $this->apiService->getArticleToSell();

            // Récupération des mouvements d'entrées sorties des articles
            $dataJsonMvt = $this->apiService->getMvt();

            if ($dataJsonToSell == [] || $dataJsonMvt == []) {
                // return la view vide
                return new view("views/palmares_article");
            } else {
                $finalSum = $this->top($dataJsonToSell, $dataJsonMvt);

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
            // Récupération des produits vendus
            $dataJsonToSell = $this->apiService->getArticleToSell();

            // Récupération des mouvements d'entrées sorties des articles
            $dataJsonMvt = $this->apiService->getMvt();

            if ($dataJsonToSell == [] || $dataJsonMvt == []) {
                // return la view vide
                return new view("views/palmares_article");
            } else {
                $finalSum = $this->top($dataJsonToSell, $dataJsonMvt);

                // Conservation du TOP 10 des ventes
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
            $topx = intval(htmlspecialchars(httpHelper::getParam("topx")));

            // Récupération des produits vendus
            $dataJsonToSell = $this->apiService->getArticleToSell();

            // Récupération des mouvements d'entrées sorties des articles
            $dataJsonMvt = $this->apiService->getMvt();

            if ($dataJsonToSell == [] || $dataJsonMvt == []) {
                // return la view vide
                return new view("views/palmares_article");
            } else {
                $finalSum = $this->top($dataJsonToSell, $dataJsonMvt);

                // Conservation du TOP 10 des ventes
                $top10 = array_slice($finalSum, 0, $topx, true);

                //set-var dans la vue
                $view = new view("views/palmares_article");
                $view->setVar("top", $top10);
                return $view;
            }
        }

    }
