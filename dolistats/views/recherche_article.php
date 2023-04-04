<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"/>
        <title>Recherche_article</title>
    </head>
    <body class="body-classic">
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . "/lib/vendor/autoload.php";
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

                <!-- case utilisateur en offset -->
                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-1 col-md-offset-7 col-xs-2">
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
                <input class="search-element search-area col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-2 col-xs-6 col-xs-offset-1"
                       type="text" placeholder="Désignation" name="designationArticle"
                <?php if (isset($_POST["designationArticle"])) { echo "value=\"".$_POST["designationArticle"]."\"";} ?>>
                <button type="submit" class="search-element search-button col-md-2 col-sm-3 col-xs-4" type="button">
                    <div><span class="fa fa-search"> </span> Rechercher </div>
                </button>
                <input type="hidden" name="controller" value="recherchearticle">
                <input type="hidden" name="action" value="rechercheArticle">
            </form>
            <!-- Fin de la searchbar -->

            <!-- Liste article -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">

                    <!-- entete -->
                    <div class="row ligne center">
                        <div class="col-sm-2 col-xs-3">
                            <h2 class="txt-liste-bold"> Désignation </h2>
                        </div>
                        <div class="col-sm-2 col-xs-3">
                            <h2 class="txt-liste-bold"> Référence </h2>
                        </div>
                        <div class="col-xs-2 col-sm-offset-6 col-xs-offset-4 right">
                                <h2 class="txt-liste-bold"> Fiche Article </h2>
                        </div>
                    </div>
                    <!-- fin entete -->

                    <!-- Si une recherche est effectuée -->
                    <?php if (isset($articles)) {  ?>

                        <!-- ligne -->
                        <?php foreach ($articles as $ligne) { ?>
                            <div class="row ligne center">
                                <div class="col-sm-2 col-xs-3">
                                    <h2 class="txt-liste-bold"> <?php echo $ligne["label"]; ?> </h2>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <h2 class="txt-liste-bold"> <?php echo $ligne["ref"]; ?> </h2>
                                </div>
                                <div class="col-xs-1 col-sm-offset-7 col-xs-offset-5 icon-voir">
                                    <h2 class="txt-liste-bold">
                                        <form action="index.php" method="post" class="flex-column">
                                            <button type="submit" class="btn-transparent">
                                                <div><span class="fa fa-eye"> </span> </div>
                                            </button>
                                            <input type="hidden" name="controller" value="recherchearticle">
                                            <input type="hidden" name="action" value="ficheArticle">
                                            <input type="hidden" name="reference" value="<?php echo $ligne["ref"]; ?>">
                                        </form>
                                    </h2>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Fin ligne -->
                    <?php } ?>
                </div>
            </div>
            <!-- fin liste article -->

            <!-- footer -->
            <footer> </footer>
        </div>
    </body>
</html>