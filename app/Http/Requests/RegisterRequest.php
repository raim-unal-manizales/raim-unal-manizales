<?php

namespace App\Http\Requests;

class RegisterRequest extends Request
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
            'user_name'             => 'required|unique:users|min:3',
            'first_name'            => 'required',
            'last_name'             => 'required',
            'educativeLevel'        => 'required',
            'institution'           => 'required',
            'email'                 => 'required|unique:users|email',
            'password'              => 'min:6|max:15|required|confirmed',
            'password_confirmation' => 'same:password',
            'birth_date'            => 'required|date',
            'language'              => 'required',
        ];
    }
}
