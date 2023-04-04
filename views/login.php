<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
        <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body class="body-login flex-row flex-justify-center">

<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/lib/vendor/autoload.php";
?>
    <!-- bloc blanc -->
    <div class="login-screen flex-column flex-align-items-center">

        <!-- Titre : DoliStats -->
        <div>
            <div class="titre-dolistats"> DoliStats </div>
        </div>

        <!-- Bloc de connexion -->
        <div class="padding-top-20">
            <form action="index.php" method="post" class="flex-column flex-align-items-center flex-gap-30">

                <!-- Identifiant -->
                <div>
                    <span class="icone fa fa-user fa-3x"></span>
                    <input type="text" name="login" placeholder="Identifiant" class="login-input"
                           value="<?php if (isset($login)) { echo $login; } ?>">
                </div>

                <!-- Mot de passe -->
                <div>
                    <span class="icone fa fa-lock fa-3x"></span>
                    <input type="password" name="password" placeholder="Mot de passe" class="login-input">
                </div>

                <!-- Liste des URL enregistrées -->
                <div>
                    <span class="icone fa fa-link fa-3x"></span>
                    <select name="url" id="url">
                        <option value="null">Selectionner une url</option>
                        <option value="autre" class="login-input">Ajouter une url</option>
                        <?php foreach ($listeUrl as $url) { ?>
                            <option value="<?php echo $url ?>" class="login-input"><?php echo $url ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div id="autreURL" style="display:none">
                    <input type="text" name="autreURL" id="autreURLInput" placeholder="Saisir une autre URL" class="login-input">
                </div>
                <!-- Script autre url -->
                <script>
                    document.getElementById('url').addEventListener('change', function() {
                        var autreOption = document.getElementById('url').value === 'autre';
                        document.getElementById('autreURL').style.display = autreOption ? 'block' : 'none';
                        if (autreOption) {
                            document.getElementById('autreURLInput').focus();
                        }
                    });
                </script>


                <!-- Bouton "Se connecter" -->
                <div>
                    <input type="submit" name="connexion" value="Se connecter" class="btn-connexion center">
                    <input type="hidden" name="controller" value="login">
                    <input type="hidden" name="action" value="connexion">
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
    <footer> </footer>
</body>
</html>

