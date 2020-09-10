<?php

namespace App\Http\Controllers\Frontend\User;

use Braintree;
use App\Http\Controllers\Controller;
use App\Domains\Currency\Models\Currency;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard.index');
    }

    public function moneytransfers() {

        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $token = $gateway->ClientToken()->generate();
        $currencyCollection = Currency::all();
        $currencies = $currencyCollection->unique('code');




        return view('frontend.user.moneytransfers.index')->with(['token' => $token, 'currencies' => $currencies]);
    }
}
