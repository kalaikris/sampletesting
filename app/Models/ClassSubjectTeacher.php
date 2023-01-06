<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubjectTeacher extends Model
{
    use HasFactory;
    protected $table = 'class__subject_teacher';
    protected $fillable = [
        'token',
        'class_token',
        'subject_token',
        'teacher_token',
        '',
        'status'
    ];
    public function class(){
        return $this->hasOne(SchoolClass::class, 'token', 'class_token');
    }
    public function subject(){
        return $this->hasOne(Subject::class, 'token', 'subject_token');
    }
    public function teacher(){
        return $this->hasOne(Teacher::class, 'token', 'teacher_token');
    }
}
