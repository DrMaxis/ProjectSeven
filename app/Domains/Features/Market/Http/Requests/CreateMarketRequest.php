<?php

namespace App\Domains\Features\Market\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;



 class CreateMarketRequest extends FormRequest {

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

            'name' => ['required',  Rule::unique('markets')],
            'business_email' => [ 'required',  Rule::unique('markets')],
            'business_phonenumber' => ['required', Rule::unique('markets')],
            'dialcode' => ['required'],
            'terms' => ['required', 'in:1'],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }

 }
