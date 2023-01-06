<?php

namespace App\Http\Resources\TeacherApp;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'token' => $this->student_token,
            'student_id' => $this->student->student_id,
            'name' => $this->student->name
        ];
    }
}
