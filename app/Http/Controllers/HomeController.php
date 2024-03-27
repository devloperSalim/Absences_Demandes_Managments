<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $demandes = Demande::orderBy('created_at','desc')
                            ->limit(5)
                            ->get();
        return view('home' , compact('demandes'));
    }
}
