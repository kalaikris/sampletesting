<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'token',
        'school_token',
        'teacher_id',
        'password',
        'name',
        'image',
        'gender',
        'mobile_number',
        'date_of_birth',
        'emergency_number',
        'email_id',
        'address',
        'father_name',
        'mother_name',
        'nationality',
        'category',
        'language_written',
        'language_spoken',
        'father_occupation',
        'mother_occupation',
        'address_proof',
        'birth_certificate',
        'passport_photo',
        'aadhar_card',
        'domicile_certificate',
        'status' 
    ];
    protected $hidden = [
        'password'
    ];
}
