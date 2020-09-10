<?php

namespace App\Domains\Features\Market\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;



 class CheckMarketNameRequest extends FormRequest {

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

            'name' => ['required'],
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
