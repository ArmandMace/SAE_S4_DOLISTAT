<?php
namespace application;

use controllers\homecontroller;
use controllers\logincontroller;
use controllers\palmaresclientcontroller;
use controllers\palmaresarticlecontroller;
use controllers\rechercheclientcontroller;
use controllers\recherchearticlecontroller;
use services\apiservice;
use yasmf\ComponentFactory;
use yasmf\NoControllerAvailableForName;
use yasmf\NoServiceAvailableForName;

/**
 * The controller Factory
 */
class defaultcomponentfactory implements ComponentFactory {
    private ?apiservice $apiService = null;

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
            "recherchearticle" => $this->buildRechercheArticleController(),
            "rechercheclient" => $this->buildRechercheClientController(),
            "palmaresarticle" => $this->buildPalmaresArticleController(),
            "palmaresclient" => $this->buildPalmaresClientController(),
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
            "api" => $this->buildAPIService(),
            default => throw new NoServiceAvailableForName($service_name)
        };
    }

    /**
     * @return HomeController
     */
    public function buildHomeController(): homecontroller
    {
        return new homecontroller();
    }

    /**
     * @return LoginController
     */
    public function buildLoginController(): logincontroller
    {
        return new logincontroller($this->buildAPIService());
    }

    /**
     * @return RechercheArticleController
     */
    public function buildRechercheArticleController(): recherchearticlecontroller
    {
        return new recherchearticlecontroller($this->buildAPIService());
    }

    /**
     * @return RechercheClientController
     */
    public function buildRechercheClientController(): rechercheclientcontroller
    {
        return new rechercheclientcontroller($this->buildAPIService());
    }

    /**
     * @return PalmaresArticleController
     */
    public function buildPalmaresArticleController(): palmaresarticlecontroller
    {
        return new palmaresarticlecontroller($this->buildAPIService());
    }

    /**
     * @return PalmaresClientController
     */
    public function buildPalmaresClientController(): palmaresclientcontroller
    {
        return new palmaresclientcontroller($this->buildAPIService());
    }

    /**
     * @return APIService
     */
    public function buildAPIService(): apiservice
    {
        if ($this->apiService == null) {
            $this->apiService = new apiservice();
        }
        return $this->apiService;
    }
}

