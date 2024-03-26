<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demande extends Model
{
    use HasFactory , SoftDeletes;


    protected $fillable = ['stagiaire_id','type','status','description'];

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class);
    }
}
