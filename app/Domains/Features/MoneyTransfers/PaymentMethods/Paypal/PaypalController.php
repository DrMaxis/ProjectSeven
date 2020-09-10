<?php

namespace App\Domains\Features\MoneyTransfers\PaymentMethods\Paypal;

use Braintree;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Paypal\CreatePaypalCustomerRequest;

/**
 * Class PaypalController.
 */
class PaypalController extends Controller
{


    public function createPaypalCustomer(CreatePaypalCustomerRequest $request) {

        $gateway = getPaypalGateway();

        $customer = $gateway->customer()->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phonenumber,
            'fax' => $request->fax,
            'website' => $request->website,
        ]);

        if($customer) {

            dd($customer, $customer->success, $customer->customer->id);
        }


    }


}
