<?php

namespace App\helpers;


use PhpParser\Node\Stmt\Case_;

if (!function_exists('checkActiveLink')) {
    function checkActiveLink($endpoint)
    {
        $className = '';
        if (\request()->getRequestUri() === $endpoint){
            $className = 'active';
        }

        return $className;
    }
}

if ( ! function_exists('apiResponse')) {
    /**
     * Slugit Function
     *
     * @todo Turn string to slug
     *
     * @param $string String to slug
     * @return string|string[]
     */
    function apiResponse($url, $data,$methodHttp = 'GET')
    {
        $end_point = $url;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $end_point,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $methodHttp,
            CURLOPT_POSTFIELDS => $data,
        ));
        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        return $response;
    }
}
