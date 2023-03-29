<?php var_dump($_SESSION);?>
<!DOCTYPE html>
	<head>
		<meta charset='utf-8'>
		<title>Palmarès article</title>
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
            <div class="row flex-row flex-align-items-center navbar padding-top-5 padding-bottom-5 ">

                <!-- case de menu navbar -->
                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <button type="submit" class="btn-transparent">
                        <div><span class="fa fa-search"> </span> </div>
                        <div class="titre-navbar"> Recherche Article </div>
                    </button>
                    <input type="hidden" name="controller" value="recherchearticle">
                    <input type="hidden" name="action" value="index">
                </form>

                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <button type="submit" class="btn-transparent">
                        <div><span class="fa fa-search"> </span> </div>
                        <div class="titre-navbar"> Recherche Client </div>
                    </button>
                    <input type="hidden" name="controller" value="rechercheclient">
                    <input type="hidden" name="action" value="index">
                </form>

                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <button type="submit" class="btn-transparent">
                        <div><span class="fa fa-chart-pie"> </span> </div>
                        <div class="titre-navbar"> Palmarès Article </div>
                    </button>
                    <input type="hidden" name="controller" value="palmaresarticle">
                    <input type="hidden" name="action" value="index">
                </form>

                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <button type="submit" class="btn-transparent">
                        <div><span class="fa fa-chart-pie"> </span> </div>
                        <div class="titre-navbar"> Palmarès Client </div>
                    </button>
                    <input type="hidden" name="controller" value="palmaresclient">
                    <input type="hidden" name="action" value="index">
                </form>

                <div class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <a href="palmares_client.html">
                        <div><span class="fa fa-money-bill"> </span> </div>
                        <div class="titre-navbar"> Chiffre d'Affaires </div>
                    </a>
                </div>

                <!-- case utilisateur en offset -->
                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-1 col-md-offset-6 col-xs-2">
                    <button type="submit" class="btn-transparent">
                        <div><span class="fas fa-power-off"> </span> </div>
                        <div class="titre-navbar"> Déconnexion </div>
                    </button>
                    <input type="hidden" name="controller" value="login">
                    <input type="hidden" name="action" value="deconnexion">
                </form>

            </div>
            <!-- Fin de la navbar -->
			
			<!-- Critères d'affichage -->
			<div class="row">
				<!-- Boutons TOP -->
				<div class="paddingBottom col-md-3 col-sm-12 col-xs-12">
					<input type="button" name="top10" value="TOP 10" class="btnTop">
					<input type="button" name="top20" value="TOP 20" class="btnTop">
					<input type="button" name="top" value="TOP" class="btnPetitTop">
					<input type="text" name="top" placeholder="..." class="saisieTop">
				</div>
				<!-- Période -->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<label class="labelText">Période du </label>
					<input type="text" name="debut" placeholder="10/01/2020" class="saisiePeriode">
					<label class="labelText"> au </label>
					<input type="text" name="fin" placeholder="10/01/2021" class="saisiePeriode">
				</div>
			</div>

			<!-- Résultats -->
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 center">
					<h1>Graphique</h1>
					  <div class="centerGraph">
							<div class="pieChartArt"></div>
					  </div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 paddingRight">
					<div class="col-xs-10">
						<h1 class="center">Résultats</h1>
					<div class="row ">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">1</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">2</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">3</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">4</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">5</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">6</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">7</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">8</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">9</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
					<div class="row">
						<div class="col-xs-12 ligne">
							<div class="col-md-1 col-sm-1 col-xs-1">10</div>
							<div class="col-md-8 col-sm-8 col-xs-8">NOM Article, Réf</div>
							<div class="col-md-3 col-sm-3 col-xs-3">CA</div>
						</div>
						<div class="col-xs-2"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>