<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'token',
        'school_token',
        'student_id',
        'password',
        'otp',
        'name',
        'gender',
        'date_of_birth',
        'blood_group',
        'emergency_contact_number',
        'mobile_number',
        'address',
        'father_name',
        'father_email_id',
        'father_mobile_number',
        'father_alter_number',
        'mother_name',
        'mother_email_id',
        'mother_mobile_number',
        'mother_alter_number',
        'is_rte',
        'status'
    ];
    protected $hidden = [
        'password'
    ];
}
