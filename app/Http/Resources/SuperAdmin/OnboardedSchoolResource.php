<?php

namespace App\Http\Resources\SuperAdmin;

use Illuminate\Http\Resources\Json\JsonResource;

class OnboardedSchoolResource extends JsonResource
{
    public function toArray($request)
    {
        if($this->logo == NUll){
            $status = "Pending";
        }else{
            $status = "Onboarded";
        }
        return [
            'token' => (string)$this->token,
            'school_id' => $this->school_id,
            'logo' => $this->logo !== null ? $this->logo : '',
            'syllabus' => $this->syllabus,
            'location' => '',
            'contact_person' => $this->contact_name,
            'contact_number' => $this->contact_number
        ];
    }
}
