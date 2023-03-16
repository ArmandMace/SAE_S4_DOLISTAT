<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome-free-5.10.2-web/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>

<?php
    require $_SERVER['DOCUMENT_ROOT'] . PREFIX_TO_RELATIVE_PATH . "/lib/vendor/autoload.php";

    use yasmf\HttpHelper;
?>
    <div class="container">
        <!-- Titre : DoliStats -->
        <div class="row">
            <div class="col-md-12 col-sm-12 xs-12 titre">DoliStats</div>
        </div>
        <!--  -->
        <form action="index.php" method="post">
            <!-- Identifiant -->
            <div class="row">
                <span class="fa fa-user fa-3x"></span>
                <input type="text" name="login" placeholder="Identifiant" class="authentification">
            </div>
            <!-- Mot de passe -->
            <div class="row">
                <span class="fa fa-lock fa-3x"></span>
                <input type="text" name="password" placeholder="Mot de passe"class="authentification">
            </div>
            <!-- Bouton "Se connecter" -->
            <div class="row">
                <input type="hidden" name="controller" value="login">
                <input type="hidden" name="action" value="connexion">
                <input type="submit" name="connexion" value="Se connecter" class="btnConnect">
            </div>
        </form>
    </div>
</body>
</html>

