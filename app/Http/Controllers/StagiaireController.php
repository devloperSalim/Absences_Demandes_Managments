<?php

namespace App\Http\Controllers;

use App\Http\Requests\StagiaireRequest;
use App\Models\Demande;
use App\Models\Group;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $stagiaires = Stagiaire::all();
        $demandes = Demande::orderBy('created_at','desc')
        ->limit(5)
        ->get();
        return view('stagiaire.list_stagiaire',compact('stagiaires','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        $demandes = Demande::orderBy('created_at','desc')
        ->limit(5)
        ->get();
        return view('stagiaire.ajouter_stagiaire', compact('groups','demandes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StagiaireRequest $request)
    {
        // dd($request);
        $stagaire_en_formation = $request->stagaire_en_formation === 'oui' ? true : false;
        $formFields = $request->validated();
        $formFields['stagaire_en_formation'] = $stagaire_en_formation;
        $formFields['password']=Hash::make($request->password);
        // dd($formFields);
        Stagiaire::create($formFields);

        return redirect()->route('stagiaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {

        $demandes = Demande::orderBy('created_at','desc')
        ->limit(5)
        ->get();
        return view('stagiaire.list_absence_stagiaire',compact('stagiaire','demandes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
    }
}
