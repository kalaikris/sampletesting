<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Laravel\Passport\HasApiTokens;
class School extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'token',
        'school_id',
        'name',
        'email_id',
        'status'
    ];
    protected $hidden = [
        'password'
    ];
    public function teachers(){
        return $this->hasMany(Teacher::class, 'school_token', 'token');
    }
    public function academicYears(){
        return $this->hasMany(AcademicYear::class, 'school_token', 'token');
    }
}
