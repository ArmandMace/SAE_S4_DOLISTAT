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
    require $_SERVER['DOCUMENT_ROOT']. PREFIX_TO_RELATIVE_PATH. "/lib/vendor/autoload.php";

    use yasmf\HttpHelper;
?>

<!-- TODO completer le code HTML de la page + CSS -->
    <h1>Dolistats</h1><br>
    <form name="login" target="index.html" method="POST">
        <input type="text" name="identifiant" placeholder="identifiant">
        <input type="text" name="mdp" placeholder="mot de passe">
        <input type="hidden" name="controller" value="login">
        <input type="hidden" name="action" value="login">
    </form>
</body>
</html>

