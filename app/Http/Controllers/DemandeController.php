<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemandeRequest;
use App\Models\Demande;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables ;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        $demandes = Demande::where('status', 'encour')
                ->orderBy('created_at', 'desc')
                ->get();
        // $demandes = Demande::orderBy('created_at','ASC')->get();
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

        Demande::create($formFields);
        return redirect()->route('demandes.show',$formFields["stagiaire_id"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
{
    $stagiaireId = Auth::id();
    

    $demandes = Demande::where('stagiaire_id', $stagiaireId)
                        ->orderBy('created_at', 'asc')
                        ->get();
    return view('demande.mydemende', compact('demandes'));
}


public function traiter(Request $request)
{
    $stagiaires = Stagiaire::all();
    $demandes = Demande::where('status', 'traiter')
                ->orderBy('created_at', 'desc')
                ->get();
    return view('demande.demande_traiter', compact('demandes','stagiaires'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
         //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request )
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
