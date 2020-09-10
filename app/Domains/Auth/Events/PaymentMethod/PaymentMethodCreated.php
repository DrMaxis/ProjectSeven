<?php

namespace App\Domains\Auth\Events\PaymentMethod;



use Illuminate\Queue\SerializesModels;
use App\Domains\Auth\Models\PaymentMethod;

/**
 * Class PaymentMethodCreated.
 */
class PaymentMethodCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $method;

    /**
     * @param $method
     */
    public function __construct(PaymentMethod $method)
    {
        $this->method = $method;
    }
}
