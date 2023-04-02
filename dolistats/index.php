<?php
    const PREFIX_TO_RELATIVE_PATH = "/dolistats";
    require $_SERVER['DOCUMENT_ROOT'] . PREFIX_TO_RELATIVE_PATH . "/lib/vendor/autoload.php"; // Appel de la classe autoload

    use application\defaultcomponentfactory;
    use yasmf\Router;

    $router = new Router(new defaultcomponentfactory()); // Création de l'objet routeur
    $router->route(PREFIX_TO_RELATIVE_PATH); // redirection vers le dossier de l'application

