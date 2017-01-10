<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'user_name' => 'sometimes|required|min:3',
            'first_name' => 'required',
            'last_name' => 'required',
            'educativeLevel' => 'required',
            'institution' => 'required',
            'email' => 'sometimes|required|email',
            'password' => 'sometimes|required',
            'birth_date' => 'required|date',
            'language' => 'required',
        ];
    }
}
