<?php

namespace App\Domains\Auth\Models\Traits\Relationship;

use App\Domains\Features\Market\Models\Market;




/**
 * Class UserRelationship.
 */
trait AccountRelationship
{






      /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_uuid', 'uuid');
    }


  /**
     * @return mixed
     */
    /* public function paymentmethods()
    {
        return $this->hasMany(PaymentMethod::class, 'account_uuid', 'uuid');
    } */


      /**
     * @return mixed
     */
    public function market()
    {
        return $this->hasOne(Market::class, 'account_uuid', 'uuid');
    }


}
