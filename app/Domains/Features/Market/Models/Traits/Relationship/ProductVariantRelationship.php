<?php

namespace App\Domains\Features\Market\Models\Traits\Relationship;

use App\Domains\Features\Market\Models\Product;



/**
 * Class ProductVariantRelationship.
 */
trait ProductVariantRelationship
{



    public function product() {
        $this->belongsTo(Product::class);
    }




}
