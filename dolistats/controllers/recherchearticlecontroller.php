<?php
namespace controllers;

    use yasmf\view;
    use yasmf\httpHelper;
    use services\APIService;

    session_start();
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

        public function rechercheArticle(): View
        {
            $dataJson = $this->apiService->getArticle();

            if ($dataJson == []) {
                return new view("views/recherche_article");
            } else {
                $view = new view("views/recherche_article");
                $view->setVar("articles", $dataJson);
                return $view;
            }

        }

        public function ficheArticle() : View
        {
            return new view("views/fiche_article");
        }
    }

