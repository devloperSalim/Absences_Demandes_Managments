<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Stagiaire extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

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
