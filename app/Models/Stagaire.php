<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_number',
        'name',
        'email',
        'password',
        'phone',
        'hire_date'


    ];
}
