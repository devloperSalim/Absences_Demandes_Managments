<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stagiaire extends Model
{
    use HasFactory , SoftDeletes;

protected $fillable = ['password','nom','prenom','email_etu','stagaire_en_formation','nationalite','group_id','date_pv'];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function absences(){
        return $this->hasMany(Absence::class);
    }

      public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
}
