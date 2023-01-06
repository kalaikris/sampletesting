<?php

namespace App\Http\Requests\TeacherApp;

use Illuminate\Foundation\Http\FormRequest;

class LoginTeacherRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'teacher_id' => ['required', 'string', 'max:200'],
            'password' => ['required', 'min:6']
        ];
    }
}
