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

            <!-- fiche produit -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <!-- en tete -->
                    <div class="row entete">
                        <div class="col-md-2 flex-row flex-justify-center"> <img class="img" src="img/produit_vide.png"> </div>
                        <div class="col-md-7 flex-column flex-justify-space-between height-55"> 
                            <div class="titre-en-tete"> <?php echo $ref; ?> </div>
                            <div class="texte-en-tete"> <?php echo $label?> </div>
                        </div>
                        <div class="col-md-3 flex-column flex-justify-space-between height-100">
                            <form action="index.php" method="post" class="titre-en-tete center">
                                <button type="submit" class="btn-transparent">
                                    Retour Liste
                                </button>
                                <input type="hidden" name="controller" value="recherchearticle">
                                <input type="hidden" name="action" value="index">
                            </form>
                            <div class="flex-row flex-justify-center flex-gap-20"> 
                                <div class=<?php if($status == 1) { echo "\"btn-vert\"> En vente"; } else { echo "\"btn-blanc\"> Hors vente"; }?> </div>
                                <div class=<?php if($statusBuy == 1) { echo "\"btn-vert\"> En Achat"; } else { echo "\"btn-blanc\"> Hors Achat"; }?> </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin entete -->



                    <!-- liste de la fiche -->
                    <div class="flex-row padding-top-20">

                        <!-- DROITE -->
                        <div class="flex-column flex-gap-20 flex-justify-center col-md-6">

                            <!-- lignes -->
                            <div class="row ligne"> 
                                <div class="col-md-6"> Description </div>
                                <div class="col-md-6"> <?php echo $description;?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Poids </div>
                                <div class="col-md-6"> <?php echo $weight;?> kg</div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Pays d'origine </div>
                                <div class="col-md-6"> <?php echo $pays;?> </div>
                            </div>
                            <?php if($statusBuy != 1) { ?>
                                <div class="row ligne">
                                    <div class="col-md-6"> Prix de vente TTC </div>
                                    <div class="col-md-6"> <?php $prixTTCDec = substr($prixTTC,0,-6);
                                        echo $prixTTCDec;
                                        ?> €</div>
                                </div>
                                <div class="row ligne">
                                    <div class="col-md-6"> Prix de vente minimal TTC </div>
                                    <div class="col-md-6"> <?php $prixMinTTCDec = substr($prixMinTTC,0,-6);
                                        echo $prixMinTTCDec;
                                        ?> €</div>
                                </div>
                                <div class="row ligne">
                                    <div class="col-md-6"> Taux TVA </div>
                                    <div class="col-md-6"> <?php $tvaDec = substr($tva,0,-5);
                                        echo $tvaDec;
                                        ?> %</div>
                                </div>
                            <?php } ?>
                            <div class="row ligne">
                                <div class="col-md-6"> Stock </div>
                                <div class="col-md-6"> <?php echo $stock;?> </div>
                            </div>

                        </div>

                        <!-- GAUCHE -->
                        <div> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer> </footer>
    </body>
</html>