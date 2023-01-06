<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class ForgotOtpRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'teacher_id' => [
                'required',
                'string',
                'max:200',
                'exists:teachers,teacher_id'
            ]
        ];
    }
}