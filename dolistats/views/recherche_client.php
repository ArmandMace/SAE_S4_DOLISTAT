<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"/>
        <title>Recherche_client</title>
    </head>
    <body>
        <!-- début container principal -->
        <div class="container-fluid">

            <!-- navbar -->
            <div class="row flex-row flex-align-items-center navbar padding-top-5 padding-bottom-5 ">

                <!-- case de menu navbar -->
                <div class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <a href="recherche_article.html">
                        <div><span class="fa fa-search"> </span> </div>
                        <div class="titre-navbar"> Recherche Article </div>
                    </a>
                </div>

                <div class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <a href="recherche_client.html">
                        <div><span class="fa fa-search"> </span> </div>
                        <div class="titre-navbar"> Recherche Client </div>
                    </a>
                </div>

                <div class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <a href="palmares_article.html">
                        <div><span class="fa fa-chart-pie"> </span> </div>
                        <div class="titre-navbar"> Palmarès Article </div>
                    </a>
                </div>

                <div class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <a href="palmares_client.html">
                        <div><span class="fa fa-chart-pie"> </span> </div>
                        <div class="titre-navbar"> Palmarès Client </div>
                    </a>
                </div>

                <div class="flex-column flex-gap-5 col-md-1 col-xs-2">
                    <a href="palmares_client.html">
                        <div><span class="fa fa-money-bill"> </span> </div>
                        <div class="titre-navbar"> Chiffre d'Affaire </div>
                    </a>
                </div>

                <!-- case utilisateur en offset -->
                <form action="index.php" method="post" class="flex-column flex-gap-5 col-md-2 col-md-offset-5 col-xs-2">
                    <button type="submit" class="btn-blanc"> <span class="fas fa-power-off"> <br>Déconnexion</button>
                    <input type="hidden" name="controller" value="login">
                    <input type="hidden" name="action" value="deconnexion">
                </form>

            </div>
            <!-- Fin de la navbar -->



            <!-- searchbar -->
            <div class="row searchbar">
                <input class="search-element search-area col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-2 col-xs-6 col-xs-offset-1" type="text" placeholder="Désignation"> </input>
                <input class="search-element search-button col-md-2 col-sm-3 col-xs-4" type="button" value="RECHERCHER"> </input>
            </div>
            <!-- Fin de la searchbar -->



            <!-- Liste article -->
            <div class="row liste-element">

                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>

                    <!-- ligne -->
                    <div class="row ligne center">
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Nom </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Prénom </h2>
                        </div> 
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> CP </h2>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <h2 class="txt-liste"> Ville </h2>
                        </div>
                        <div class="col-xs-1 col-xs-offset-3 col-md-offset-7 icon-voir">
                            <h2 class="txt-liste"> <a href="fiche_client.html"> <span class="fa fa-eye"></span></a> </h2>
                        </div>
                    </div>


                </div>
            </div>
            <!-- fin liste article -->



            <!-- footer -->
            <footer> </footer>
        </div>
    </body>
</html>