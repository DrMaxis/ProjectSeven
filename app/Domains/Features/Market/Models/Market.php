<?php

namespace App\Domains\Features\Market\Models;

use App\Models\Traits\Uuid;

use Illuminate\Database\Eloquent\Model;
use App\Domains\Features\Market\Models\Traits\Method\MarketMethod;
use App\Domains\Features\Market\Models\Traits\Attribute\MarketAttribute;
use App\Domains\Features\Market\Models\Traits\Relationship\MarketRelationship;


/**
 * Class Market.
 */
class Market extends Model
{
    use MarketRelationship, MarketMethod, MarketAttribute, Uuid;

    protected $table = 'markets';

    /**
     * @var string[]
     */
    protected $fillable = [
        'account_uuid',
        'name',
        'slug',
        'default_currency',
        'about_market',
        'buisness_type',
        'offical_website',
        'selling_platforms',
        'managing_address',
        'operating_address',
        'country_of_origin',
        'tax_id',
        'year_established',
        'number_of_employees',
        'main_product_types',
        'owner',
        'phone_network',
        'business_email',
        'business_phonenumber',
        'managing_address',
        'operating_address',
        'country_of_origin',
        'pruchasing_volume',
        'primary_sourcing_purpose',
        'average_sourcing_frequency',
        'supplier_qualifications',
    ];
    /**
     * Auto update created_at and updated_at
     *
     * @var array
     */


    public $timestamps = true;

}
