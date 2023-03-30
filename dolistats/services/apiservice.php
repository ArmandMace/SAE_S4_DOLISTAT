<?php
    namespace services;

    use yasmf\HttpHelper;

    /**
     * The APIService class
     */
    class apiservice
    {
        /**
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
         * @param $id
         * @param $mdp
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

        function getArticle($designation) {
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

        function getClient($designation) {
            $urlClient = $_SESSION["url"] . "thirdparties?sortfield=t.rowid&sortorder=ASC&limit=100&sqlfilters=(t.fournisseur%20like%20'0'%20AND%20t.nom%20like%20'%25". $designation ."%25')";
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

    }

