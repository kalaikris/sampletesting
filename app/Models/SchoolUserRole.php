<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolUserRole extends Model
{
    use HasFactory;
    protected $table = 'school__user_roles';
    protected $fillable = [
        'token',
        'school_token',
        'name',
        'status'
    ];
}
