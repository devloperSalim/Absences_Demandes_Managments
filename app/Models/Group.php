<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;



    protected $fillable =['code_group','anne_formation','nbr_stagiaires','nom_ilière'];

    /**
     * Get the stagiaires associated with the group.
     */
    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class,'code_group','code_group');
    }

    /**
     * Get the absences associated with the group.
     */
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    /**
     * Get the demandes associated with the group.
     */
    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
}
