<?php

namespace App\Http\Requests\ParentApp;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class ResetPasswordRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'parent_id' => [
                'required',
                'string',
                'max:200',
                'exists:parents,parent_id'
            ],
            'otp' => ['required','string','max:6', 'min:6'],
            'password' => ['required', 'confirmed', 'min:6', Rules\Password::defaults()]
        ];
    }
}