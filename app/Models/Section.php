<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'token',
        'standard_token',
        'name',
        'status'
    ];
    public function standard(){
        return $this->hasOne(Standard::class, 'token', 'standard_token');
    }
}
