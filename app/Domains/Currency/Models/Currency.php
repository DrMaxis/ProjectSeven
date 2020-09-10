<?php

namespace App\Domains\Currency\Models;

use App\Domains\Currency\Models\Traits\Relationship\CurrencyRelationship;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Currency.
 */
class Currency extends Model
{
    use CurrencyRelationship;

    protected $table = 'currency';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'name_plural',
        'country',
        'country_code_iso3',
        'symbol',
        'symbol_native',
        'code',
        'rounding',
        'decimal_digits',
    ];
    /**
     * Auto update created_at and updated_at
     *
     * @var array
     */


    public $timestamps = true;

}
