<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    use HasFactory;
    protected $table = 'class__student';
    protected $fillable = [
        'token',
        'class_token',
        'student_token',
        'status',
        'reason'
    ];
    public function student(){
        return $this->hasOne(Student::class, 'token', 'student_token');
    }
}
