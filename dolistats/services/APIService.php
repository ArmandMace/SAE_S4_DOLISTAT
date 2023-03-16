<?php
    namespace services;

    /**
     * The APIService class
     */
    class APIService
    {
        const urlApi = "http://dolibarr.iut-rodez.fr/G2022-61/htdocs/api/index.php/";

        function createCurl($url): \CurlHandle|false
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_FAILONERROR, true);
            return $curl;
        }

        function login($id, $mdp)
        {
            $urlLogin = urlApi . "login?login=" . $id . "&password=" . $mdp;
            $curl = createCurl($urlLogin);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_status == "200") {
                return json_decode($result, true);
            } else {
                return [];
            }
        }

        function getArticle() {
            $urlArticle = self::urlApi . "products?sortfield=t.ref&sortorder=ASC&limit=100";
        }

        function getClient() {

        }

    }

