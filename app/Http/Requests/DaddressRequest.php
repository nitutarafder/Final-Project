<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaddressRequest extends FormRequest
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
            'name'=> 'required|min:5|max:30',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'city' => 'required|min:5|max:25',
            'fullAddress' => 'required',
        ];
    }
}
