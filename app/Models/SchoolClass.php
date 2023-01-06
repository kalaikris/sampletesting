<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = [
        'token',
        'class_id',
        'section_token',
        'academic_year_token',
        'capacity',
        'total_subject',
        'total_student',
        'total_teacher',
        'status'
    ];
    public function section(){
        return $this->hasOne(Section::class, 'token', 'section_token');
    }
    public function classStudents(){
        return $this->hasMany(ClassStudent::class, 'class_token', 'token');
    }
}
