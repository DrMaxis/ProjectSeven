<?php

use App\Domains\Currency\Models\Currency;



if(!function_exists('getDefaultCurrency')) {

    function getDefaultCurrency($country_code) {

        $currency = Currency::where('country_code_iso3', '=', $country_code)->first();
        return $currency->code;
    }
}
