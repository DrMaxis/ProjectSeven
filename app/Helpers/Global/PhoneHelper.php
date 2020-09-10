<?php

use App\Domains\Currency\Models\Currency;


if(!function_exists('getPhoneData')) {
    function getPhoneData($phoneNumber) {
        $client = app('Nexmo\Client');
        $response = $client->insights()->standard($phoneNumber);
        dd($response);
        return $response;

    }
}

if(!function_exists('getPhoneLocationData')) {
    function getPhoneLocationData($phonenumber) {
        $client = app('Nexmo\Client');
        $response = $client->insights()->standard($phonenumber);

        $data = [
            'country' => $response['country_code'],
            'country_name' => $response['country_name'],
            'country_code_iso3' => $response['country_code_iso3'],
            'country_phone_code' => $response['country_prefix'],
            'carrier' => $response['current_carrier']['name']

        ];

        return $data;
    }
}

