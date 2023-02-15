<?php

namespace Alerrandro\Cotation\API;

class ApiConsuming
{

    public static function getAPI()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://brapi.dev/api/quote/list'
        ]);
        $response = curl_exec($curl);
        return $response;
        curl_close($curl);
    }

    public static function ToArray()
    {
        $array = json_decode(self::getAPI(), 1);
        return $array;
    }
}
