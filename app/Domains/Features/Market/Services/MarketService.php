<?php

namespace App\Domains\Features\Market\Services;


use Exception;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Domains\Auth\Models\Account;
use App\Exceptions\GeneralException;
use App\Domains\Features\Market\Models\Market;
use App\Domains\Auth\Events\Account\MarketCreated;
use App\Domains\Auth\Events\Account\MarketDeleted;
use App\Domains\Auth\Events\Account\MarketUpdated;





/**
 * Class MarketService.
 */
class MarketService extends BaseService
{
    /**
     * MarketSericve constructor.
     *
     * @param  Market  $market
     */
    public function __construct(Market $market)
    {
        $this->model = $market;
    }

    /**
     * @param  array  $data
     *
     * @return Market
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Market
    {
        DB::beginTransaction();

        try {
            /*
                Create Market with

                Name
                Slug
                AccountID => Creating User's AccountID
                Default Currency = Associated Account's Default Currency
                Owners Name = Associated Account's Name or User's Name

            */
            $user = auth()->user();
            $account = $user->account;

            if(Str::startsWith($data['business_phonenumber'], $data['dialcode'])) {
                $phonenumber = preg_replace('/\D+/', '', $data['business_phonenumber']);
            } else {
                $phonenumber = $data['dialcode'].$data['business_phonenumber'];
            }
            //dd($user, $account, $data);

            $market = $this->model::create([
                'name' => $data['name'],
                'slug' => slugify($data['name']),
                'owners_name' => $account->owner,
                'default_currency' => $account->default_currency,
                'account_uuid' => $account->uuid,
                'business_email' => $data['business_email'],
                'business_phonenumber' => $phonenumber,
                'phone_network' => getPhoneLocationData($data['business_phonenumber'])['carrier'],
            ]);
            dd($market);

        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating a Market for you.'));
        }

        event(new MarketCreated($market));

        DB::commit();

        return $market;
    }

    /**
     * @param  Market  $method
     * @param  array  $data
     *
     * @return Market
     * @throws GeneralException
     * @throws \Throwable
     */
    public function update(Market $method, array $data = []): Market
    {
        DB::beginTransaction();

        try {
            $method->update([
                // insert update here
            ]);

        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this payment method.'));
        }

        event(new MarketUpdated($method));

        DB::commit();

        return $method;
    }

    /**
     * @param  Market  $method
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Market $method): bool
    {


        if ($this->deleteById($method->id)) {
            event(new MarketDeleted($method));

            return true;
        }

        throw new GeneralException(__('There was a problem deleting the payment method.'));
    }
}
