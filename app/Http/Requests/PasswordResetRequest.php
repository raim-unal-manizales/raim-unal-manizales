<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PasswordResetRequest extends Request
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
            'password'              => 'min:6|max:15|required',
            'password_confirmation' => 'same:password',
        ];
    }
}
