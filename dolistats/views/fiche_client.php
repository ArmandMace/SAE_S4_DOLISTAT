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

            <!-- En tête produit -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <!-- en tete -->
                    <div class="row entete">
                        <div class="col-md-2 flex-justify-center flex-row"> <span class="fa fa-building img"></span> </div>
                        <div class="col-md-7 flex-column ">
                            <div class="titre-en-tete"> <?php echo $name;?> </div>
                            <div class="txt-classic"> <span class="fa fa-map"></span> <?php echo $loca;?> </div>
                            <div class="txt-classic"> <span class="fa fa-phone"></span> <?php echo $tel;?> </div>
                        </div>
                        <div class="col-md-3 flex-column flex-justify-space-between height-100">
                            <div class="titre-en-tete center">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="controller" value="rechercheclient">
                                    <input type="hidden" name="action" value="index">
                                    <button type="submit" class="btn-transparent">Retour Liste</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- fin entete -->



                    <!-- liste de la fiche -->
                    <div class="row flex-row flex-gap-20 padding-top-20">

                        <!-- DROITE -->
                        <div class="flex-column flex-gap-20 col-md-6">

                            <!-- lignes -->
                            <div class="row ligne"> 
                                <div class="col-md-6"> Nom du client </div>
                                <div class="col-md-6"> <?php echo $name; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Alias </div>
                                <div class="col-md-6"> <?php echo $alias; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Code client </div>
                                <div class="col-md-6"> <?php echo $code_cli; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Mail </div>
                                <div class="col-md-6"> <?php echo $mail; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> SIREN </div>
                                <div class="col-md-6"> <?php echo $siren; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> SIRET </div>
                                <div class="col-md-6"> <?php echo $siret; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Numéro de TVA </div>
                                <div class="col-md-6"> <?php echo $numTVA; ?> </div>
                            </div>

                        </div>

                        <!-- GAUCHE -->
                        <div class="flex-column flex-gap-20 col-md-6">

                            <!-- lignes -->
                            <div class="row ligne"> 
                                <div class="col-md-6"> Type du tiers </div>
                                <div class="col-md-6"> <?php echo $type; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Effectif </div>
                                <div class="col-md-6"> <?php echo $effectif; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Type d'entité légale </div>
                                <div class="col-md-6"> <?php echo $identite_legale; ?> </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Capital </div>
                                <div class="col-md-6">
                                    <?php $capitalDec = substr($capital,0,-6);
                                    echo $capitalDec;
                                    ?> € </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin liste de la fiche-->



                    <!-- Liste des factures -->
                    <div class=" row titre-liste-facture padding-top-50"> Historique factures </div>
                    <!-- liste de la fiche -->
                    <div class="flex-column flex-gap-20 padding-top-20">

                        <div class="row ligne center">
                            <div class="col-md-1 titre-en-tete"> Etat </div>
                            <div class="col-md-2 titre-en-tete"> Ref </div>
                            <div class="col-md-2 titre-en-tete"> Date </div>
                            <div class="col-md-2 titre-en-tete"> Date Echéance </div>
                            <div class="col-md-2 titre-en-tete"> Montant HT </div>
                            <div class="col-md-2 titre-en-tete"> Montant TTC </div>
                            <div class="col-md-1 titre-en-tete"> PDF </div>
                        </div>
                        <?php foreach ($factures as $facture) { ?>
                            <div class="row ligne center flex-row">
                                <div class="col-md-1 <?php if($facture["paye"] == 0) { echo "btn-beige\"> Impayée"; } else { echo "btn-gris\"> Payée"; }?> </div>
                                <div class="col-md-2"> <?php echo $facture["ref"]; ?> </div>
                                <div class="col-md-2">
                                    <?php
                                        $date = \Datetime::createFromFormat('U', $facture["date"]);
                                        echo $date->format('d/m/Y');
                                    ?>
                                </div>
                                <div class="col-md-2"> <?php
                                        $date = \Datetime::createFromFormat('U', $facture["date_lim_reglement"]);
                                        echo $date->format('d/m/Y');
                                    ?> </div>
                                <div class="col-md-2"> <?php $factureHTDec = substr($facture["total_ht"],0,-6);
                                    echo $factureHTDec;
                                    ?> € </div>
                                <div class="col-md-2"> <?php $factureTTCDec = substr($facture["total_ttc"],0,-6);
                                    echo $factureTTCDec;
                                    ?> €</div>
                                <div class="col-md-2"> <a href="<?php echo str_replace("api/index.php/",
                                "document.php?modulepart=facture&file=". $facture["ref"] ."%2F". $facture["ref"] .".pdf&entity=1",
                                $session["url"]) ?>">PDF</a> </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer> </footer>
    </body>
</html>