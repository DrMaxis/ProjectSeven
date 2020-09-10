<?php

namespace App\Domains\Features\Market\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Features\Market\Models\Traits\Method\ProductSubcategoryMethod;
use App\Domains\Features\Market\Models\Traits\Attribute\ProductSubcategoryAttribute;
use App\Domains\Features\Market\Models\Traits\Relationship\ProductSubcategoryRelationship;






/**
 * Class Account.
 */
class ProductSubcategory extends Model
{
    use ProductSubcategoryRelationship, Uuid, ProductSubcategoryMethod, ProductSubcategoryAttribute;


    /**
     * The database table used by the model.
     *
     * @var string
     */


    protected $table = 'product_subcategories';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [

        'category_id',
        'name',
        'slug',

    ];



    /**
     * Auto update created_at and updated_at
     *
     * @var array
     */


    public $timestamps = true;
}
