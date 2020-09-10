<?php

namespace App\Domains\Features\Market\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Features\Market\Models\Traits\Method\ProductVariantMethod;
use App\Domains\Features\Market\Models\Traits\Attribute\ProductVariantAttribute;
use App\Domains\Features\Market\Models\Traits\Relationship\ProductVariantRelationship;





/**
 * Class ProductVariant.
 */
class ProductVariant extends Model
{
    use ProductVariantRelationship, Uuid, ProductVariantMethod, ProductVariantAttribute;


    /**
     * The database table used by the model.
     *
     * @var string
     */


    protected $table = 'product_variants';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [

        'product_id',
        'name',
        'slug',
        'model',
        'sku',
        'details',
        'price',
        'shipping_weight',
        'box_length',
        'box_width',
        'box_height',
        'description',
        'inventory_stock',
        'featured',
        'image',
        'images',
        'category',
        'color',

    ];



    /**
     * Auto update created_at and updated_at
     *
     * @var array
     */


    public $timestamps = true;
}
