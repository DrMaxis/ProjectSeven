<?php

namespace App\Domains\Features\Market\Models\Pivots;

use Illuminate\Database\Eloquent\Model;

class VariantProduct extends Model
{
    protected $table = 'variant_product';

    protected $fillable = ['product_id', 'variant_id'];

}
