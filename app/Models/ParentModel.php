<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ParentModel extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;
    protected $table = 'parents';
    protected $fillable = [
        'token',
        'parent_id',
        'password',
        'otp',
        'father_name',
        'father_email_id',
        'father_mobile_number',
        'father_alter_number',
        'mother_name',
        'mother_email_id',
        'mother_mobile_number',
        'mother_alter_number',
        'status'
    ];
    protected $hidden = [
        'password'
    ];
}
