<?php
namespace controllers;

use yasmf\view;
use yasmf\httpHelper;
use services\APIService;

class RechercheArticleController
{
    private APIService $apiService;

    public function __construct(APIService $apiService)
    {
        $this->apiService = $apiService;
    }

    /**
     * @return view
     */
    public function index() : View {
        return new view("views/recherche_article");
    }

    public function ficheArticle() : View
    {
        return new view("views/fiche_article");
    }
}

