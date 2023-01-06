<?php

namespace App\Http\Requests\StudentApp;

use Illuminate\Foundation\Http\FormRequest;

class LoginStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'student_id' => ['required', 'string', 'max:200'],
            'password' => ['required', 'min:6']
        ];
    }
}
