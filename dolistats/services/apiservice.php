<?php
    namespace services;

    use yasmf\HttpHelper;

    /**
     * The APIService class
     */
    class apiservice
    {
        /**
         * Fonction de création de l'objet curl utilisé pour accéder à l'API
         * @param $url
         * @return \CurlHandle|false
         */
        function createCurl($url): \CurlHandle|false
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_FAILONERROR, true);
            if (isset($session["token"])) { // Utilise le token d'accés à l'api si utilisateur connecté
                curl_setopt($curl, CURLOPT_HTTPHEADER, array("DOLAPIKEY:".$session["token"]));
            }
            return $curl;
        }

        /**
         * Fonction de connexion à l'API
         * @param $id
         * @param $mdp
         * @param $url
         * @return array|mixed
         */
        function login($id, $mdp, $url): mixed
        {
            $urlLogin = $url . "login?login=" . $id . "&password=" . $mdp;
            $curl = $this->createCurl($urlLogin);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, false);
            } else {
                return [];
            }
        }

        /**
         * Focntion de recherche des articles correpsondants à $designation
         * @param $designation
         * @return array|mixed
         */
        function getArticle($designation) : mixed
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $urlArticle = $session["url"] . "products?sortfield=t.ref&sortorder=ASC&limit=100&sqlfilters=(t.label%3Alike%3A'%25".$designation."%25')";
            $curl = $this->createCurl($urlArticle);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        /**
         * Renvoie les données d'un article recherché par sa réference
         * @param $ref
         * @return mixed
         */
        function getArticleByRef($ref) : mixed
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $urlRefArticle = $session["url"] . "products?sortfield=t.ref&sortorder=ASC&limit=100&sqlfilters=(t.ref%3Alike%3A'".$ref."')";
            $curl = $this->createCurl($urlRefArticle);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        /**
         * Renvoie la liste des articles vendus
         * @return array|mixed
         */
        function getArticleToSell()
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $url = $session["url"] . "products?sortfield=t.ref&sortorder=ASC&sqlfilters=(t.tosell%3A%3D%3A1)";
            $curl = $this->createCurl($url);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        /**
         * Renvoie la liste des clients
         * @param $designation
         * @return array|mixed
         */
        function getClient($designation)
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $urlClient = $session["url"] . "thirdparties?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=(t.fournisseur%20like%20'0'%20AND%20t.nom%20like%20'%25". $designation ."%25')";
            $curl = $this->createCurl($urlClient);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        /**
         * Renvoie les données d'un client
         * @param $nom
         * @return array|mixed
         */
        function getClientByNom($nom)
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $nom = str_replace(" ", "%20", $nom);
            $url = $session["url"] . "thirdparties?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=(t.fournisseur%3Alike%3A'0')%20and%20(t.nom%3Alike%3A'". $nom ."')";
            $curl = $this->createCurl($url);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        function getFactures()
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            //algo
            $url = $session["url"] . "invoices?sortfield=t.rowid&sortorder=ASC&limit=100";
            $curl = $this->createCurl($url);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        /**
         * Renvoie les différentes factures d'un client
         * @param $ref
         * @return array|mixed
         */
        function getFacturesByClient($ref)
        {
            // Variable session
            $session = json_decode(file_get_contents('session'.session_id().'.json'), true);

            // algo
            $urlFacture = $session["url"] . "invoices?sortfield=t.rowid&sortorder=ASC&limit=100&thirdparty_ids=". $ref;
            $curl = $this->createCurl($urlFacture);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }
    }

