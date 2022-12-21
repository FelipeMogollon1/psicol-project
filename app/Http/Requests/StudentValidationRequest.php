<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentValidationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'document' => ['required', 'max:10', 'numeric'],
//            'name',
//            'last_name',
//            'phone_number',
//            'email',
//            'address',
//            'city'
        ];
    }
}
