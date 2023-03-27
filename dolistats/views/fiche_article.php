<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../../Users/Mathy/Documents/Uwamp_2020/www/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../../../../Users/Mathy/Documents/Uwamp_2020/www/fontawesome-free-5.10.2-web/css/all.css">
        <link rel="stylesheet" href="../../../../../Users/Mathy/Documents/Uwamp_2020/www/Vues%20Dolistats/css/style.css">
        <title>Recherche_article</title>
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



            <!-- En tête produit -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <!-- en tete -->
                    <div class="row entete">
                        <div class="col-md-2 flex-row flex-justify-center"> <img class="img" src="../img/produit_vide.png"> </div>
                        <div class="col-md-7 flex-column flex-justify-space-between height-55"> 
                            <div class="titre-en-tete"> Ref. </div>
                            <div class="texte-en-tete"> Libellé </div>
                        </div>
                        <div class="col-md-3 flex-column flex-justify-space-between height-100">
                            <div class="titre-en-tete center"> <a href="recherche_article.html"> Retour liste </a></div>
                            <div class="flex-row flex-justify-center flex-gap-20"> 
                                <div class="btn-vert"> En vente </div>
                                <div class="btn-blanc"> Hors achat </div>
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
                                <div class="col-md-6"> Ceci est une description du produit que vous avez sélectionné </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Poids </div>
                                <div class="col-md-6"> 1000kg </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Pays d'origine </div>
                                <div class="col-md-6"> Chine </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Prix de vente TTC </div>
                                <div class="col-md-6"> 220€ </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Prix de vente minimal TTC </div>
                                <div class="col-md-6"> 220€ </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Taux TVA </div>
                                <div class="col-md-6"> 20% </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Stock </div>
                                <div class="col-md-6"> 27 </div>
                            </div>

                        </div>

                        <!-- GAUCHE -->
                        <div> </div>
                    </div>
                </div>
            </div>



            <!-- footer -->
            <footer> </footer>
        </div>
    </body>
</html>