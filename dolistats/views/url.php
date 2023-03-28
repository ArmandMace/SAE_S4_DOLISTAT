<?php session_start() ?>
<!DOCTYPE html>
	<head>
		<meta charset='utf-8'>
		<title>URL</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"/>
	</head>
	<body class="bodyIndex">
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . PREFIX_TO_RELATIVE_PATH . "/lib/vendor/autoload.php";
    ?>
		<div class="container">
			<!-- Titre : DoliStats -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 titre">DoliStats</div>
			</div>
			<!--  -->
			<form action="index.php" method="post">
				<!-- Saisie URL-->
				<div class="row">
					<span class="fa fa-link fa-3x"></span>
					<input type="text" name="url" placeholder="URL de connexion" class="authentification">
				</div>
				<!-- Bouton "Se connecter" -->
				<div class="row">
					<input type="submit" name="valider" value="Valider" class="btnConnect">
                    <input type="hidden" name="controller" value="login">
                    <input type="hidden" name="action" value="index">
			</form>
		</div>
	</body>
</html>