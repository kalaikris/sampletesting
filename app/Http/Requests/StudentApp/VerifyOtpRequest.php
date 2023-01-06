<?php

namespace App\Http\Requests\StudentApp;

use Illuminate\Foundation\Http\FormRequest;

class VerifyOtpRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'student_id' => [
                'required',
                'string',
                'max:200',
                'exists:students,student_id'
            ],
            'otp' => [
                'required',
                'string',
                'max:6',
                'min:6'
            ]
        ];
    }
}