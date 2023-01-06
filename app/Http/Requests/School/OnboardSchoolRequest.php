<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class OnboardSchoolRequest extends FormRequest
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
            'school_name' => ['required', 'string', 'max:200'],
            'affiliation_number' => ['required', 'string', 'max:200'],
            'syllabus' => ['required', 'string', 'in:CBSE,Stateboard,Matriculation'],
            'medium_type' => ['required', 'string', 'in:English,Tamil'],
            'contact_name' => ['required', 'string', 'max:200'],
            'contact_number' => ['required', 'string', 'max:20'],
            'website' => ['required', 'string', 'max:200'],
            'address_line_1' => ['required', 'string', 'max:200'],
            'address_line_2' => ['required', 'string', 'max:200'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
            'state_id' => [
                'required',
                'integer', 
                'exists:states,id,country_id,'.$this->country_id
            ],
            'city_id' => [
                'required',
                'integer', 
                'exists:cities,id,state_id,'.$this->state_id
            ],
            'pincode' => ['required', 'string', 'max:200'],
            'subject_csv' => [
                'required','file'
            ],
            'teacher_csv' => [
                'required','file'
            ],
            'class_csv' => [
                'required','file'
            ],
            'student_csv' => [
                'required','file'
            ]
        ];
    }
}
