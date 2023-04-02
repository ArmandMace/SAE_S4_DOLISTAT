<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"/>
        <title>Recherche_client</title>
    </head>
    <body class="body-classic">
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . PREFIX_TO_RELATIVE_PATH . "/lib/vendor/autoload.php";
    ?>
        <!-- début container principal -->
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



            <!-- searchbar -->
            <form class="row searchbar" action="index.php" method="post">
                <input type="text" name="designationClient" class="search-element search-area col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-2 col-xs-6 col-xs-offset-1"  placeholder="Désignation">
                <button type="submit" class="search-element search-button col-md-2 col-sm-3 col-xs-4" type="button">
                    <div><span class="fa fa-search"> </span> Rechercher </div>
                </button>
                <input type="hidden" name="controller" value="rechercheclient">
                <input type="hidden" name="action" value="rechercheClient">
            </form>
            <!-- Fin de la searchbar -->

            <!-- Liste client -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">

                    <!-- entete -->
                    <div class="row ligne center">
                        <div class="col-md-3 col-xs-2">
                            <h2 class="txt-liste-bold"> Nom Société </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste-bold"> CP </h2>
                        </div>
                        <div class="col-md-2 col-xs-2">
                            <h2 class="txt-liste-bold"> Ville </h2>
                        </div>
                        <div class="col-xs-2 col-xs-offset-2 col-md-offset-4 right">
                            <h2 class="txt-liste-bold"> Fiche Client </h2>
                        </div>
                    </div>
                    <!-- fin entete -->

                    <!-- Si une recherche est effectuée -->
                    <?php if (isset($clients)) { ?>

                        <!-- ligne -->
                        <?php foreach ($clients as $ligne) { ?>
                        <div class="row ligne center">
                            <div class="col-md-3 col-xs-2">
                                <h2 class="txt-liste-bold"> <?php echo $ligne['name'] ?> </h2> <!-- Nom entreprise -->
                            </div>
                            <div class="col-md-1 col-xs-2">
                                <h2 class="txt-liste-bold"> <?php echo $ligne['zip'] ?> </h2> <!-- CP -->
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <h2 class="txt-liste-bold"> <?php echo $ligne['town'] ?> </h2> <!-- Ville -->
                            </div>
                            <div class="col-xs-1 col-xs-offset-3 col-md-offset-5 right">
                                <h2 class="txt-liste-bold">
                                    <form action="index.php" method="post" class="flex-column">
                                        <input type="hidden" name="name" value="<?php echo $ligne["name"]; ?>">
                                        <input type="hidden" name="ref" value="<?php echo $ligne["ref"]; ?>">
                                        <input type="hidden" name="controller" value="rechercheclient">
                                        <input type="hidden" name="action" value="ficheClient">
                                        <button type="submit" class="btn-transparent">
                                            <div><span class="fa fa-eye"> </span> </div>
                                        </button>
                                    </form>
                                </h2>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- fin de ligne -->
                    <?php } ?>
                </div>
            </div>
            <!-- fin liste client -->
        </div>
        <!-- footer -->
        <footer> </footer>
    </body>
</html>