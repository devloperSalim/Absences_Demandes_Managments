<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemandeRequest;
use App\Models\Demande;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        $demandes = Demande::orderBy('created_at','ASC')->get();
        return view('demande.inbox_demande',compact('demandes','stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request )
    {
        $idStagiaire = Auth::user()->id;
        return view('demande.create' , compact('idStagiaire'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandeRequest $request)
    {
        // dd($request);
        $formFields = $request->validated();
        // dd($formFields['stagiaire_id']);
        Demande::create($formFields);
        return redirect()->route('demandes.show',$formFields['stagiaire_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Demande $demande)
    {
        $stagiaires =Stagiaire::all();
        return view('demande.mydemende',compact('demande','stagiaires'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demande $demande)
    {
        //
    }
}
