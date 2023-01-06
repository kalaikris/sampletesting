<?php

namespace App\Http\Resources\ParentApp;

use Illuminate\Http\Resources\Json\JsonResource;

class ParentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'student_id' => $this->student_id,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'age' => $this->date_of_birth,
            'blood_group' => $this->blood_group,
            'mobile_number' => $this->mobile_number,
            'address' => $this->address,
            'father_name' => $this->father_name,
            'father_email_id' => $this->father_email_id,
            'father_mobile_number' => $this->father_mobile_number,
            'father_alter_number' => $this->father_alter_number,
            'mother_name' => $this->mother_name,
            'mother_email_id' => $this->mother_email_id,
            'mother_mobile_number' => $this->mother_mobile_number,
            'mother_alter_number' => $this->mother_alter_number
        ];
    }
}