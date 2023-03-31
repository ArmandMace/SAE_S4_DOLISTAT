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
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_FAILONERROR, true);
            if (isset($_SESSION["token"])) {
                curl_setopt($curl, CURLOPT_HTTPHEADER, array("DOLAPIKEY:".$_SESSION["token"]));
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
            $urlArticle = $_SESSION["url"] . "products?sortfield=t.ref&sortorder=ASC&limit=100&sqlfilters=(t.label%3Alike%3A'%25".$designation."%25')";
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
            $urlRefArticle = $_SESSION["url"] . "products?sortfield=t.ref&sortorder=ASC&limit=100&sqlfilters=(t.ref%3Alike%3A'".$ref."')";
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
        function getClient() {

        }

    }

