<?php
    namespace services;

    /**
     * The APIService class
     */
    class APIService
    {
        const urlApi = "http://dolibarr.iut-rodez.fr/G2022-61/htdocs/api/index.php/";

        function login($id, $mdp)
        {
            $curl = curl_init();
            $urlLogin = self::urlApi . "login?login=" . $id . "&password=" . $mdp;

            curl_setopt($curl, CURLOPT_URL, $urlLogin);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_FAILONERROR, true);

            $result = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            echo $http_status;
            echo $result;
            curl_close($curl);

            /**
             * if ($http_status == "200") {
             * return json_decode($result, true);
             * } else {
             * $result = [];
             * return $result;
             * }
             */
        }

        function getArticle() {
            $urlArticle = self::urlApi . "products?sortfield=t.ref&sortorder=ASC&limit=100";
        }

        function getClient() {

        }

    }

