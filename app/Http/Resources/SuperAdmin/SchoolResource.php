<?php

namespace App\Http\Resources\SuperAdmin;

use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
{
    public function toArray($request)
    {
        if($this->country_id == NUll){
            $status = "Pending";
        }else{
            $status = "Onboarded";
        }
        return [
            'token' => (string)$this->token,
            'school_id' => $this->school_id,
            'name' => $this->name,
            'email_id' => $this->email_id,
            'invited_date' => $this->created_at->timezone('Asia/Kolkata')->format('d M Y'),
            'status' => $status,
        ];
    }
}