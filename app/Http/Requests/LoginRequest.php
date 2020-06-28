<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        return
            [
                'country' => 'required',
                'phone' => 'required|max:11|numeric',
                'password' => ['regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',
                    'required',
                    'min:8']
            ];
    }

    public function messages()
    {
        return
            [
                'country.required' => 'Your Country Field is Required',
                'phone.required' => 'Your Phone Number is Required',
                'phone.max' => 'Your Phone Number Name Must Not Exceed 11 Numbers',
                'phone.numeric' => 'Your Phone Number Must Be Numbers Only',
                'password.regex' => 'Your Password Must Contain Capital Letters, Small Letters, Special Characters & Numbers',
                'password.min' => 'Your Password Must Not Be Less Than 8 Characters'
            ];
    }
}
