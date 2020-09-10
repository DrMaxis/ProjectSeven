<?php

namespace App\Http\Requests\Frontend\Paypal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class CreatePaypalCustomerRequest.
 */
class CreatePaypalCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'firstname' => ['required'],
           'lastname' => ['required'],
           'company' => ['sometimes'],
           'email' => ['required'],
           'phonenumber' => ['sometimes'],
           'fax' => ['sometimes'],
           'website' => ['sometimes'],
        ];
    }
}
