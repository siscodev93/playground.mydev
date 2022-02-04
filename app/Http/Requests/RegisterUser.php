<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
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

    public function messages()
    {
        return [
            'name.required' => 'please enter your name',
            'email.required' => 'email address is required, it cannot be left blank',
            'password.required' => 'password cannot be blank',
            'password_confirm.same' => 'passwords do not match, please try to retype them',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email' ,'max:50'],
            'password' => ['required', 'min:6' ,'max:50'],
            'password_confirm' => ['required', 'same:password']
        ];
    }
}
