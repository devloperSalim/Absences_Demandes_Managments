<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stagiaire extends Model
{
    use HasFactory , SoftDeletes;


    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function absences(){
        return $this->hasMany(Absence::class);
    }
    public function demandes(){
        return $this->hasMany(Demande::class);
    }
}
