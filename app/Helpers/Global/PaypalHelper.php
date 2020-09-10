<?php


use Carbon\Carbon;

if (! function_exists('getPaypalGateway')) {
    /**
     * Helper to grab the Paypal Gateway.
     *
     * @return mixed
     */
    function getPaypalGateway()
    {
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        return $gateway;
    }
}

if (! function_exists('getPaypalToken')) {
    /**
     * Helper to grab the Paypal Gateway.
     *
     * @return mixed
     */
    function getPaypalToken()
    {
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $token = $gateway->ClientToken()->generate();
        return $token;
    }
}
