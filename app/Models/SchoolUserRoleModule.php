<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolUserRoleModule extends Model
{
    use HasFactory;
    protected $table = 'school__user_role_modules';
    protected $fillable = [
        'token',
        'user_role_token',
        'module_token'
    ];
}
