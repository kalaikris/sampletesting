<?php

namespace App\Http\Resources\Teacher;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'token' => $this->student_token,
            'student_id' => $this->student->student_id,
            'name' => $this->student->name,
            'gender' => $this->student->gender,
            'date_of_birth' => date("d M Y",strtotime($this->student->date_of_birth)),
            'contact_number' => $this->student->mobile_number
        ];
    }
}
