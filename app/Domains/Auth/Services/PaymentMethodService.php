<?php

namespace App\Domains\Auth\Services;


use Exception;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;
use App\Domains\Auth\Models\Account;
use App\Exceptions\GeneralException;
use App\Domains\Auth\Models\PaymentMethod;
use App\Domains\Auth\Events\PaymentMethod\PaymentMethodCreated;
use App\Domains\Auth\Events\PaymentMethod\PaymentMethodDeleted;
use App\Domains\Auth\Events\PaymentMethod\PaymentMethodUpdated;

/**
 * Class PaymentMethodService.
 */
class PaymentMethodService extends BaseService
{
    /**
     * PaymentMethodService constructor.
     *
     * @param  PaymentMethod  $method
     */
    public function __construct(PaymentMethod $method)
    {
        $this->model = $method;
    }

    /**
     * @param  array  $data
     *
     * @return PaymentMethod
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): PaymentMethod
    {
        DB::beginTransaction();

        try {
            /*

                Create PaymentMethod with :
                Associated Account
                Customer ID
                Payment Method Name


            */
            $method = $this->model::create([
                'name' => $data['name'],
                'account_id' => $data['account_id'],
                'customer_id' => $data['customer_id'],

            ]);

        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating a payment method for this payment method.'));
        }

        event(new PaymentMethodCreated($method));

        DB::commit();

        return $method;
    }

    /**
     * @param  PaymentMethod  $method
     * @param  array  $data
     *
     * @return PaymentMethod
     * @throws GeneralException
     * @throws \Throwable
     */
    public function update(PaymentMethod $method, array $data = []): PaymentMethod
    {
        DB::beginTransaction();

        try {
            $method->update([

            ]);

        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this payment method.'));
        }

        event(new PaymentMethodUpdated($method));

        DB::commit();

        return $method;
    }

    /**
     * @param  PaymentMethod  $method
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(PaymentMethod $method): bool
    {


        if ($this->deleteById($method->id)) {
            event(new PaymentMethodDeleted($method));

            return true;
        }

        throw new GeneralException(__('There was a problem deleting the payment method.'));
    }
}
