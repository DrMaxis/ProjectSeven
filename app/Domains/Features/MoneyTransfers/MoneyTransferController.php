<?php

namespace App\Domains\Features\MoneyTransfers;

use Braintree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class MoneyTransferController.
 */
class MoneyTransferController extends Controller
{

    public function paypalTransaction(Request $request) {


        $gateway = getPaypalGateway();
        $amount = $request->amount;
        $nonce = $request->payment_method_noonce;
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if($result->success) {
            $transaction = $result->transaction;
            return back()->with('success_message', 'Transaction Successful. The ID is: '. $transaction->id);
        } else
        $errorString = " ";
        foreach($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }
    }


}
