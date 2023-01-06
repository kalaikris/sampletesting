<?php

namespace App\Http\Resources\Teacher;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassTeacherResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'subject_name' => $this->subject->name,
            'teacher_name' => $this->teacher->name,
            'is_class_teacher' => $this->is_class_teacher
        ];
    }
}
