<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    use HasFactory;
    protected $table = 'student__parents';
    protected $fillable = [
        'token',
        'student_token',
        'parent_token',
        'status'
    ];

    public function student(){
        return $this->hasOne(studentToken::class, 'token', 'student_token');
    }
    public function parent(){
        return $this->hasOne(parentToken::class, 'token', 'parent_token');
    }

}
