<?php

namespace App\Domains\Features\Market\Models\Traits\Relationship;

use App\Domains\Features\Market\Models\Market;
use App\Domains\Features\Market\Models\ProductVariant;

/**
 * Class ProductRelationship.
 */
trait ProductRelationship
{


   /**
     * @return mixed
     */
    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    /**
     * @return mixed
     */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }





}
