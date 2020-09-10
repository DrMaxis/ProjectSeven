<?php

namespace App\Domains\Auth\Services;


use Exception;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;
use App\Domains\Auth\Models\Account;
use App\Exceptions\GeneralException;
use App\Domains\Auth\Events\Account\AccountCreated;
use App\Domains\Auth\Events\Account\AccountUpdated;
use App\Domains\Auth\Events\Account\AccountDeactivated;

/**
 * Class AccountService.
 */
class AccountService extends BaseService
{
    /**
     * AccountService constructor.
     *
     * @param  Account  $account
     */
    public function __construct(Account $account)
    {
        $this->model = $account;
    }




    /**
     * @param  array  $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function registerAccount(array $data = []): Account
    {
        DB::beginTransaction();

        try {
            $account = $this->createAccount($data);
        } catch (Exception $e) {
            dd($e, $data);
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating your account.'));
        }

        DB::commit();

        return $account;
    }


    /**
     * @param  array  $data
     *
     * @return Account
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Account
    {
        DB::beginTransaction();

        try {
            /*

                Create Account with :
                Associated User
                Default Currency
                Account Balance
                Account Email
                Account Phone number
                Account Phone Network
                Account Type
                Account Country

            */
            $account = $this->model::create([
                'user_uuid' => $data['user_uuid'],
                'default_currency' => $data['default_currency'],
                'base_country' => $data['base_country'],
                'account_balance' => 0.00,
                'account_email' => $data['email'],
                'account_phone' => $data['phonenumber'],
                'account_phone_network' => $data['phonenetwork'],

            ]);

        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating a account.'));
        }

        event(new AccountCreated($account));

        DB::commit();

        return $account;
    }

    /**
     * @param  Account  $account
     * @param  array  $data
     *
     * @return Account
     * @throws GeneralException
     * @throws \Throwable
     */
    public function update(Account $account, array $data = []): Account
    {
        DB::beginTransaction();

        try {
            $account->update([

            ]);

        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this account.'));
        }

        event(new AccountUpdated($account));

        DB::commit();

        return $account;
    }

    /**
     * @param  Account  $account
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Account $account): bool
    {


        if ($this->deleteById($account->id)) {
            event(new AccountDeactivated($account));

            return true;
        }

        throw new GeneralException(__('There was a problem deleting the account.'));
    }


     /**
     * @param  array  $data
     *
     * @return Account
     */
    protected function createAccount(array $data = []): Account
    {
        return $this->model::create([
            'user_uuid' => $data['user_uuid'], //currently registering users uuid
            'owner' => $data['owner'], // user name
            'default_currency' => $data['default_currency'], //currency gatherd from ip information
            'base_country' => $data['base_country'], // location
            'account_balance' => 0.00,
            'account_email' => $data['account_email'], // email
            'account_phone' => $data['account_phone'], // number
            'account_phone_network' => $data['account_phone_network'], //phone network data
        ]);
    }
}
