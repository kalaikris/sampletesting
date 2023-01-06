<?php

namespace App\Http\Requests\ParentApp;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class StoreParentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'father_name' => ['required', 'string', 'max:200'],
            'father_email_id' => ['required', 'string', 'max:200', 'unique:parents'],
            'password' => ['required', 'confirmed', 'min:6', Rules\Password::defaults()]
        ];
    }
}