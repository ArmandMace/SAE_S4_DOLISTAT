<?php
    namespace application;

    use controllers\HomeController;
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

        public function buildAPIService(): APIService
        {
            if ($this->apiService == null) {
                $this->apiService = new APIService();
            }
            return $this->apiService;
        }
    }

