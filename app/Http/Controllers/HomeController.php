<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Group;
use App\Models\Stagiaire; 

class HomeController extends Controller
{
    public function index(){

        $demandes = Demande::where('status', 'encour')
            ->orderBy('created_at', 'desc')
            ->get();
        $countGroup =Group::count();
        $countStagiaire =Stagiaire::count();
        return view('home' , compact('demandes','countStagiaire','countGroup'));
    }
}
