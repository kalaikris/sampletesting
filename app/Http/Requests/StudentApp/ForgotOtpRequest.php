<?php

namespace App\Http\Requests\StudentApp;

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
            'student_id' => [
                'required',
                'string',
                'max:200',
                'exists:students,student_id'
            ]
        ];
    }
}