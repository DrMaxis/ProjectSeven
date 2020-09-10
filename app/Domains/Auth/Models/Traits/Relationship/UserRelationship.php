<?php

namespace App\Domains\Auth\Models\Traits\Relationship;

use App\Domains\Auth\Models\Account;
use App\Domains\Auth\Models\PasswordHistory;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    /**
     * @return mixed
     */
    public function passwordHistories()
    {
        return $this->morphMany(PasswordHistory::class, 'model');
    }

      /**
     * @return mixed
     */
    public function account()
    {
        return $this->hasOne(Account::class, 'user_uuid', 'uuid');
    }

}
