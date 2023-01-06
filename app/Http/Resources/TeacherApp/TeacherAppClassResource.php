<?php

namespace App\Http\Resources\TeacherApp;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherAppClassResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'token' => $this->class_token,
            'standard' => $this->class->section->standard->name,
            'section' => $this->class->section->name,
            'student_count' => count($this->class->classStudents),
            'subject' => $this->subject->name,
            'is_class_teacher' => $this->is_class_teacher
        ];
    }
}
