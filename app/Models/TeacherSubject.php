<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherSubject extends Model
{
    use HasFactory;
    protected $table = 'teacher__subjects';
    protected $fillable = [
        'teacher_token',
        'subject_token',
        'status'
    ];
}
