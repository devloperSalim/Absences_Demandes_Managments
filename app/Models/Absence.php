<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absence extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['stagiaire_id','fromDate','toDate','type_abs','nbr_seance','nbr_hour'];


    public function stagiaire(){
        return $this->belongsTo(Stagiaire::class);
    }
}
