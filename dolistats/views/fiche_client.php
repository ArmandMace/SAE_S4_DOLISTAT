<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../../Users/Mathy/Documents/Uwamp_2020/www/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../../../../Users/Mathy/Documents/Uwamp_2020/www/fontawesome-free-5.10.2-web/css/all.css">
        <link rel="stylesheet" href="../../../../../Users/Mathy/Documents/Uwamp_2020/www/Vues%20Dolistats/css/style.css">
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
                <div class="flex-column flex-gap-5 col-md-1 col-md-offset-6 col-xs-2">
                    <a href="palmares_client.html">
                        <div><span class="fa fa-user"> </span> </div>
                        <div class="titre-navbar"> Deconexion </div>
                    </a>
                </div>
            </div>
            <!-- Fin de la navbar -->



            <!-- En tête produit -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <!-- en tete -->
                    <div class="row entete">
                        <div class="col-md-2 flex-justify-center flex-row"> <span class="fa fa-building img"></span> </div>
                        <div class="col-md-7 flex-column ">
                            <div class="titre-en-tete"> Nom du Tiers </div>
                            <div class="texte-en-tete"> <span class="fa fa-map"></span> Localisation </div>
                            <div class="texte-en-tete"> <span class="fa fa-phone"></span> Téléphone </div>
                        </div>
                        <div class="col-md-3 flex-column flex-justify-space-between height-100">
                            <div class="titre-en-tete center"> <a href="recherche_client.html"> Retour liste </a></div>
                            <div class="flex-row flex-justify-center"> 
                                <div class="btn-vert"> Client </div> <!-- Prospect ou client -->
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
                                <div class="col-md-6"> Alibaba </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Alias </div>
                                <div class="col-md-6"> Ali </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Code client </div>
                                <div class="col-md-6"> CU233-000001 </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Mail </div>
                                <div class="col-md-6"> ali@alibaba.com </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> SIREN </div>
                                <div class="col-md-6"> 352 554 661 </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> SIRET </div>
                                <div class="col-md-6"> 352 554 661 00046 </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Numéro de TVA </div>
                                <div class="col-md-6"> FR51 3525 5466 1 </div>
                            </div>

                        </div>

                        <!-- GAUCHE -->
                        <div class="flex-column flex-gap-20 col-md-6"> 
                            <!-- lignes -->
                            <div class="row ligne"> 
                                <div class="col-md-6"> Type du tiers </div>
                                <div class="col-md-6"> ??? </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Effectif </div>
                                <div class="col-md-6"> ??? </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Type d'entité légale </div>
                                <div class="col-md-6"> ??? </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Capital </div>
                                <div class="col-md-6"> 21 463 531,00€ </div>
                            </div>
                            <div class="row ligne">
                                <div class="col-md-6"> Commerciaux </div>
                                <div class="col-md-6"> 
                                    <div class="flex-column flex-gap-5">
                                        <div><span class="fa fa-user"></span> ChefCommercialMarketing </div>
                                        <div><span class="fa fa-user"></span> EquipeCommercial </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin liste de la fiche-->



                    <!-- Liste des factures -->
                    <div class=" row titre-liste-facture padding-top-50"> Historique factures </div>
                    <!-- liste de la fiche -->
                    <div class="flex-column flex-gap-20 padding-top-20">

                        <div class="row ligne center">
                            <div class="col-md-2 titre-en-tete"> Date </div>
                            <div class="col-md-6 titre-en-tete"> Produit </div>
                            <div class="col-md-2 titre-en-tete"> Quantité </div>
                            <div class="col-md-2 titre-en-tete"> Prix unitaire</div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        <div class="row ligne center">
                            <div class="col-md-2"> 01/01/2023 </div>
                            <div class="col-md-6"> Chaise Electrique </div>
                            <div class="col-md-2"> 2 </div>
                            <div class="col-md-2"> 220,00€ </div>
                        </div>
                        
                    </div>
                </div>
            </div>



            <!-- footer -->
            <footer> </footer>
        </div>
    </body>
</html>