<?php

namespace App\Domains\Features\Market\Models\Traits\Relationship;

use App\Domains\Auth\Models\Account;
use App\Domains\Features\Market\Models\Product;



/**
 * Class MarketRelationship.
 */
trait MarketRelationship
{



    /**
     * @return mixed
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }


 /**
     * @return mixed
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }



}
