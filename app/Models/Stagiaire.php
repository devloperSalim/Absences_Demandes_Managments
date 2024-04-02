<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Stagiaire extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $guard = 'stagiaire';
    protected $fillable = ['password','nom','prenom','email_etu','stagaire_en_formation','nationalite','group_id','date_pv','status'];

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
