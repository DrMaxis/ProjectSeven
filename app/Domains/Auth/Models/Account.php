<?php

namespace App\Domains\Auth\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Auth\Models\Traits\Method\AccountMethod;
use App\Domains\Auth\Models\Traits\Attribute\AccountAttribute;
use App\Domains\Auth\Models\Traits\Relationship\AccountRelationship;



/**
 * Class Account.
 */
class Account extends Model
{
    use AccountRelationship, Uuid, AccountMethod, AccountAttribute;


    /**
     * The database table used by the model.
     *
     * @var string
     */


    protected $table = 'accounts';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [

        'user_uuid',
        'owner',
        'default_currency',
        'base_country',
        'account_balance',
        'account_email',
        'account_phone',
        'account_phone_network',
        'last_updated',
        'closed',
        'default_payment_method_id',
        'default_payment_method_type',

    ];



    /**
     * Auto update created_at and updated_at
     *
     * @var array
     */


    public $timestamps = true;
}
