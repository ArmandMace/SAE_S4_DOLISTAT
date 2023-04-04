<!DOCTYPE html>
	<head>
		<meta charset='utf-8'>
		<title>Palmarès client</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"/>
	</head>
	<body class="body-classic">
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . "/lib/vendor/autoload.php";
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

            <!-- Page -->
            <div class="row">

                <!-- GAUCHE - Graphique + critère -->
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <!-- Critères d'affichage -->
                    <form action="index.php" method="post" class="row height-150 flex-row flex-align-items-center">

                        <!-- Boutons TOP -->
                        <div class="col-md-6">

                            <!-- TOP 10 -->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <button type="submit" class="btn-TOP" name="action" value="top10">
                                    <div> TOP 10 </div>
                                </button>
                            </div>

                            <!-- TOP 20 -->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <button type="submit" class="btn-TOP" name="action" value="top20">
                                    <div> TOP 20 </div>
                                </button>
                            </div>

                            <!-- TOP x -->
                            <div class="col-md-4 col-sm-12 col-xs-12 flex-row flex-gap-0">
                                <button type="submit" class="btn-TOP-x" name="action" value="topx">
                                    <div> TOP </div>
                                </button>
                                <input type="text" name="topx" class="btn-TOP-blank" >
                            </div>
                            <input type="hidden" name="controller" value="palmaresclient">
                        </div>

                        <!-- Période -->
                        <div class="col-md-6 flex-column flex-align-items-center flex-gap-5">
                            <div class="txt-liste-bold"> Période du </div>
                            <input type="date" name="dateMin" min="2000-01-01"  max="2100-01-01" class="date">
                            <div class="txt-liste-bold"> au </div>
                            <input type="date" name="dateMax" min="2000-01-01"  max="2100-01-01" class="date">
                        </div>
                    </form>
                    <!-- fin des crière d'affichage -->

                    <!-- GRAPHIQUE -->
                    <div class="row titre-en-tete center padding-top-50"> Graphique </div>

                    <!-- contenu -->
                    <?php if (isset($top)) {
                        $ref = [];
                        $occurence = [];
                        $compteur = 0;
                        foreach ($top as $key => $value) {
                            $ref[$compteur] = $key;
                            $occurence[$compteur] = $value;
                            $compteur ++;
                        }
                    ?>
                        <!-- graphique -->
                        <canvas id="myChart" class="padding-top-20"></canvas>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const ctx = document.getElementById('myChart');

                            new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: [<?php foreach ($ref as $item) { echo "\"".$item."\","; }; ?>],
                                    datasets: [{
                                        label: 'CA ',
                                        data: [<?php foreach ($occurence as $item) { echo "\"".$item."\","; }; ?>],
                                        borderWidth: 1
                                    }]
                                },
                            });
                        </script>
                        <!-- fin graphique -->
                    <?php } ?>
				</div>

                <!-- DROITE - Liste des résultats -->
				<div class="col-md-6 col-sm-12 col-xs-12">

                    <!-- titre -->
                    <div class="row titre-en-tete center padding-top-20"> Résultats </div>

                    <!-- liste -->
                    <div class="flex-column padding-top-20 padding-edge-20">

                        <!-- entete -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-liste-bold"> Rang </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-liste-bold"> Nom Article </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-4">
                                <h2 class="txt-liste-bold"> CA </h2>
                            </div>
                        </div>
                        <!-- fin entete -->

                        <!-- si une recherche est effectuée -->
                        <?php if (isset($top)) { ?>

                            <!-- ligne -->
                            <?php $rang = 1; foreach ($top as $key => $value) { ?>
                                <div class="row ligne center">
                                    <div class="col-xs-1">
                                        <h2 class="txt-classic"> <?php echo $rang; ?> </h2>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <h2 class="txt-classic"> <?php echo $key; ?> </h2>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-4">
                                        <h2 class="txt-classic"> <?php echo $value; ?> €</h2>
                                    </div>
                                </div>
                                <?php $rang ++ ; } ?>
                        <!-- fin de ligne -->
                        <?php } ?>
                    </div>
                </div>
            </div>
		</div>
        <!-- footer -->
        <footer> </footer>
	</body>
</html>