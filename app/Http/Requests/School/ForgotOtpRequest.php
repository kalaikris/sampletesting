<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class ForgotOtpRequest extends FormRequest
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
            'school_id' => [
                'required',
                'string',
                'max:200',
                'exists:school__users,school_id'
            ]
        ];
    }
}
