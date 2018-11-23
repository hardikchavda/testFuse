<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class registeration extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'state' => 'required'
        ];
    }

    public function messages() {
        return[
            'firstname.required' => ':attribute is not Filled and is compulsury.',
            'required' => ':attribute should be filled.'
        ];
    }

}
