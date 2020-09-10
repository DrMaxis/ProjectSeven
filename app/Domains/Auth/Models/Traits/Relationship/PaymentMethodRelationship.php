<?php

namespace App\Domains\Auth\Models\Traits\Relationship;




/**
 * Class PaymentMethodRelationship.
 */
trait PaymentMethodRelationship
{


    public function account()
    {
        return $this->belongsTo(Account::class);
    }



}
