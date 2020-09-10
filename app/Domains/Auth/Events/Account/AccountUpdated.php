<?php

namespace App\Domains\Auth\Events\Account;


use App\Domains\Auth\Models\Account;
use Illuminate\Queue\SerializesModels;

/**
 * Class AccountUpdated.
 */
class AccountUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $account;

    /**
     * @param $user
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }
}
