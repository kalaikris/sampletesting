<?php

namespace App\Http\Requests\StudentApp;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class StoreStudentRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:200'],
            'father_email_id' => ['required', 'string', 'max:200', 'unique:students'],
            'password' => ['required', 'confirmed', 'min:6', Rules\Password::defaults()]
        ];
    }
}