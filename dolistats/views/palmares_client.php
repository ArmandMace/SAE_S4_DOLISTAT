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



            <!-- Page -->
            <div class="row">

                <!-- GAUCHE - Graphique + critère -->
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <!-- Critères d'affichage -->
                    <div class="row height-150 flex-row flex-align-items-center">

                        <!-- Boutons TOP -->
                        <div class="col-md-6">

                            <!-- TOP 10 -->
                            <form action="index.php" method="post" class="col-md-4 col-sm-12 col-xs-12">
                                <button type="submit" class="btn-TOP">
                                    <div> TOP 10 </div>
                                </button>
                                <input type="hidden" name="controller" value="palmaresclient">
                                <input type="hidden" name="action" value="top10">
                            </form>

                            <!-- TOP 20 -->
                            <form action="index.php" method="post" class="col-md-4 col-sm-12 col-xs-12">
                                <button type="submit" class="btn-TOP">
                                    <div> TOP 20 </div>
                                </button>
                                <input type="hidden" name="controller" value="palmaresclient">
                                <input type="hidden" name="action" value="top20">
                            </form>

                            <!-- TOP x -->
                            <form action="index.php" method="post" class="col-md-4 col-sm-12 col-xs-12 flex-row flex-gap-0">
                                <button type="submit" class="btn-TOP-x">
                                    <div> TOP </div>
                                </button>
                                <input type="text" name="top" class="btn-TOP-blank">
                                <input type="hidden" name="controller" value="palmaresclient">
                                <input type="hidden" name="action" value="topx">
                            </form>
                        </div>

                        <!-- Période -->
                        <div class="col-md-6 flex-column flex-align-items-center flex-gap-5">
                            <div class="txt-liste-bold"> Période du </div>
                            <input type="date" min="2000-01-01"  max="2100-01-01" class="date">
                            <div class="txt-liste-bold"> au </div>
                            <input type="date" min="2000-01-01"  max="2100-01-01" class="date">
                        </div>
                    </div>
                    <!-- fin des crière d'affichage -->

                    <!-- GRAPHIQUE -->
                    <div class="row titre-en-tete center padding-top-50"> Graphique </div>

                    <!-- contenu -->

                </div>

                <!-- DROITE - Liste des résultats -->
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <!-- titre -->
                    <div class="row titre-en-tete center padding-top-20"> Résultats </div>

                    <!-- liste -->
                    <div class="flex-column padding-top-20 padding-edge-20">

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 1 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 2 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 3 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 4 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 5 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 6 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 7 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 8 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 9 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>

                        <!-- ligne -->
                        <div class="row ligne center">
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> 10 </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> NOM </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Prénom </h2>
                            </div>
                            <div class="col-xs-1">
                                <h2 class="txt-classic"> CP </h2>
                            </div>
                            <div class="col-xs-2">
                                <h2 class="txt-classic"> Ville </h2>
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <h2 class="txt-classic"> CA </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <!-- footer -->
        <footer> </footer>
	</body>
</html>