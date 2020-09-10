<?php

namespace App\Domains\Auth\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Auth\Models\Traits\Method\PaymentMethodMethod;
use App\Domains\Auth\Models\Traits\Attribute\PaymentMethodAttribute;
use App\Domains\Auth\Models\Traits\Relationship\PaymentMethodRelationship;



/**
 * Class PaymentMethod.
 */
class PaymentMethod extends Model
{
    use PaymentMethodRelationship, Uuid, PaymentMethodMethod, PaymentMethodAttribute;


    /**
     * The database table used by the model.
     *
     * @var string
     */


    protected $table = 'account_payment_methods';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [

        'name',
        'account_id',
        'customer_id',

    ];



    /**
     * Auto update created_at and updated_at
     *
     * @var array
     */


    public $timestamps = true;
}
