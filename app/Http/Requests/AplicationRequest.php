<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AplicationRequest extends Request
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
          'name' => 'required',
          'url'  => 'required',
          'logo'  => 'sometimes|required',
          'type'  => 'required',
          'rquiered_information'  => 'required',
          'rquiered_personalization'  => 'required',
          'rquiered_NEDD'  => 'required',
          'rquiered_learningStyle'  => 'required',
          'state'  => 'required',
          'systemRoute'  => 'required',
        ];
    }
}
