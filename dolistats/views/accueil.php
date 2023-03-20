<?php session_start() ?>
<!DOCTYPE html>
	<head>
		<meta charset='utf-8'>
		<title>Accueil</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"/>
	</head>
	<body class="bodyPage">
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . PREFIX_TO_RELATIVE_PATH . "/lib/vendor/autoload.php";
    ?>
		<div class="container-fluid">
			<!-- navbar -->
			<div class="row navbar">
				<div class="col-md-1 col-xs-2">
					<a href="rechercheArticle.php">
						<h2 class="titre-navbar">
							<span class="fa fa-search fa-2x"></span><br/><br/>
							Recherche Article 
						</h2>
					</a>
				</div>

				<div class="col-md-1 col-xs-2">
					<a href="rechercheClient.php">
						<h2 class="titre-navbar">
							<span class="fa fa-search fa-2x"></span><br/><br/>
							Recherche Client 
						</h2>
					</a>
				</div>

				<div class="col-md-1 col-xs-2">
					<a href="palmaresArticle.php">
						<h2 class="titre-navbar">
							<span class="fa fa-chart-pie fa-2x"></span><br/><br/>
							Palmarès Article 
						</h2>
					</a>
				</div>

				<div class="col-md-1 col-xs-2">
					<a href="palmaresClient.php">
						<h2 class="titre-navbar">
							<span class="fa fa-chart-pie fa-2x"></span><br/><br/>
							Palmarès Client 
						</h2>
					</a>
				</div>

				<div class="col-md-1 col-xs-2">
					<a href="chiffreDAffaires.php">
						<h2 class="titre-navbar">
							<span class="fa fa-money-bill fa-2x"></span><br/><br/>
							Chiffre d'affaires 
						</h2>
					</a>
				</div>

				<!-- case utilisateur en offset -->
				<div class="col-md-1 col-md-offset-6 col-xs-2">
					<form action="index.php" method="post">
                        <button type="submit" class="btn btn-circle btn-xxl"><span class="fas fa-power-off">  Déconnexion</button>
                        <input type="hidden" name="controller" value="login">
                        <input type="hidden" name="action" value="deconnexion">
				</div>
			</div>
			<!-- Fin de la navbar -->
		</div>
	</body>
</html>
