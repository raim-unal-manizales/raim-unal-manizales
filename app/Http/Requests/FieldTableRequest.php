<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FieldTableRequest extends Request
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
            'id_table' => 'required',
            'id_type_field' => 'required',
            'name' => 'required',
            'name_db' => 'required',
            'field_required' => 'required',
            'field_recommendation' => 'required'
        ];
    }
}
