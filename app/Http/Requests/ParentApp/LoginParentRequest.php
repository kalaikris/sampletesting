<?php

namespace App\Http\Requests\ParentApp;

use Illuminate\Foundation\Http\FormRequest;

class LoginParentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'parent_id' => ['required', 'string', 'max:200'],
            'password' => ['required', 'min:6']
        ];
    }
}
