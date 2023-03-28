<?php
namespace application;

use controllers\HomeController;
use controllers\LoginController;
use controllers\PalmaresArticleController;
use controllers\PalmaresClientController;
use controllers\RechercheArticleController;
use controllers\RechercheClientController;
use services\APIService;
use yasmf\ComponentFactory;
use yasmf\NoControllerAvailableForName;
use yasmf\NoServiceAvailableForName;

/**
 * The controller Factory
 */
class DefaultComponentFactory implements ComponentFactory {
    private ?APIService $apiService = null;

    /**
     * @param string $controller_name name of the controller to instantiate
     * @return mixed the controller
     * @throws NoControllerAvailableForName when controller is not found
     */
    public function buildControllerByName(string $controller_name): mixed
    {
        return match ($controller_name) {
            "Home" => $this->buildHomeController(),
            "login" => $this->buildLoginController(),
            "rechercheArticle" => $this->buildRechercheArticleController(),
            "rechercheClient" => $this->buildRechercheClientController(),
            "palmaresArticle" => $this->buildPalmaresArticleController(),
            "palmaresClient" => $this->buildPalmaresClientController(),
            default => throw new NoControllerAvailableForName($controller_name)
        };
    }

    /**
     * @param string $service_name name of the service to instantiate
     * @return mixed the service
     * @throws NoServiceAvailableForName when service is not found
     */
    public function buildServiceByName(string $service_name): mixed
    {
        return match ($service_name) {
            "API" => $this->buildAPIService(),
            default => throw new NoServiceAvailableForName($service_name)
        };
    }

    /**
     * @return HomeController
     */
    public function buildHomeController(): HomeController
    {
        return new HomeController();
    }

    /**
     * @return LoginController
     */
    public function buildLoginController(): LoginController
    {
        return new LoginController($this->buildAPIService());
    }

    /**
     * @return RechercheArticleController
     */
    public function buildRechercheArticleController(): RechercheArticleController
    {
        return new RechercheArticleController($this->buildAPIService());
    }

    /**
     * @return RechercheClientController
     */
    public function buildRechercheClientController(): RechercheClientController
    {
        return new RechercheClientController($this->buildAPIService());
    }

    /**
     * @return PalmaresArticleController
     */
    public function buildPalmaresArticleController(): PalmaresArticleController
    {
        return new PalmaresArticleController($this->buildAPIService());
    }

    /**
     * @return PalmaresClientController
     */
    public function buildPalmaresClientController(): PalmaresClientController
    {
        return new PalmaresClientController($this->buildAPIService());
    }

    /**
     * @return APIService
     */
    public function buildAPIService(): APIService
    {
        if ($this->apiService == null) {
            $this->apiService = new APIService();
        }
        return $this->apiService;
    }
}

