<?php
    namespace controllers;

    use yasmf\View;
    use yasmf\HttpHelper;
    use services\APIService;

    class recherchearticlecontroller
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
            return new view("views/recherche_article");
        }

        /**
         * Recherche les différents article en fonction de la désignation
         * @return View recherche_article avec les articles affichés
         */
        public function rechercheArticle(): View
        {
            $designation = htmlspecialchars(httpHelper::getParam("designationArticle"));
            $dataJson = $this->apiService->getArticle($designation);
            if ($dataJson == [] or $designation=="") {
                return new view("views/recherche_article");
            } else {
                $view = new view("views/recherche_article");
                $view->setVar("articles", $dataJson);
                return $view;
            }
        }

        /**
         * Affiche la fiche d'un article de la liste des articles recherchés
         * @return View fiche_article
         */
        public function ficheArticle() : View
        {
            $ref = htmlspecialchars(httpHelper::getParam("reference"));
            $dataJson = $this->apiService->getArticleByRef($ref);
            if ($dataJson == []) {
                return new view("views/recherche_article");
            } else {
                $view = new view("views/fiche_article");
                foreach($dataJson as $item) {
                    $view->setVar("ref", $item["ref"]);
                    $view->setVar("label", $item["label"]);
                    $view->setVar("status", $item["status"]);
                    $view->setVar("statusBuy", $item["status_buy"]);
                    $view->setVar("description", $item["description"]);
                    $view->setVar("weight", $item["weight"]);
                    $view->setVar("pays", $item["country_code"]);
                    $view->setVar("prixTTC", $item["price_ttc"]);
                    $view->setVar("prixMinTTC", $item["price_min_ttc"]);
                    $view->setVar("tva", $item["tva_tx"]);
                    $view->setVar("stock", $item["stock_reel"]);
                }
                return $view;
            }
        }
    }

