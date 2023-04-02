<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/lib/vendor/autoload.php"; // Appel de la classe autoload

    use application\defaultcomponentfactory;
    use yasmf\Router;

    $router = new Router(new defaultcomponentfactory()); // Création de l'objet routeur
    $router->route(); // redirection vers le dossier de l'application

