<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SchoolUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'school__users';
    protected $fillable = [
        'token',
        'school_token',
        'school_id',
        'name',
        'email_id',
        'password',
        'mobile_number',
        'user_role_token',
        'status'
    ];
    protected $hidden = [
        'password'
    ];
}
