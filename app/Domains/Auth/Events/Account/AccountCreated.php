<?php

namespace App\Domains\Auth\Events\Account;


use App\Domains\Auth\Models\Account;
use Illuminate\Queue\SerializesModels;

/**
 * Class AccountCreated.
 */
class AccountCreated
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
