<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class ResetPasswordRequest extends FormRequest
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
            'teacher_id' => [
                'required',
                'string',
                'max:200',
                'exists:teachers,teacher_id'
            ],
            'otp' => ['required','string','max:6', 'min:6'],
            'password' => ['required', 'confirmed', 'min:6', Rules\Password::defaults()]
        ];
    }
}
