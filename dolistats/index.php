<?php
    const PREFIX_TO_RELATIVE_PATH = "/SAE_S4_DOLISTAT/dolistats"; // Constante du dossier de l'application
    require $_SERVER['DOCUMENT_ROOT'] . PREFIX_TO_RELATIVE_PATH . "/lib/vendor/autoload.php"; // Appel de la classe autoload

    use application\DefaultComponentFactory;
    use yasmf\Router;

    $router = new Router(new DefaultComponentFactory()); // Création de l'objet routeur
    $router->route(PREFIX_TO_RELATIVE_PATH); // redirection vers le dossier de l'application

