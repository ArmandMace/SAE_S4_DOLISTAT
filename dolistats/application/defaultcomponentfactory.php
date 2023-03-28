<?php
    namespace application;

    use controllers\homecontroller;
    use controllers\logincontroller;
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
                "rechercheArticle" => $this->buildRechercheArticleController(),
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
         * @return homecontroller
         */
        public function buildHomeController(): homecontroller
        {
            return new homecontroller();
        }

        /**
         * @return logincontroller
         */
        public function buildLoginController(): logincontroller
        {
            return new logincontroller($this->buildAPIService());
        }

        /**
         * @return recherchearticlecontroller
         */
        public function buildRechercheArticleController(): recherchearticlecontroller
        {
            return new recherchearticlecontroller($this->buildAPIService());
        }

        /**
         * @return apiservice
         */
        public function buildAPIService(): apiservice
        {
            if ($this->apiService == null) {
                $this->apiService = new apiservice();
            }
            return $this->apiService;
        }
    }

