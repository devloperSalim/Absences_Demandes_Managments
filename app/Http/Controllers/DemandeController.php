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
    public function create(Request $request)
    {
        // $idStagiaire = $request->query('idStagiaire');

        // Pass the $idStagiaire variable to the view
        return view('demande.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandeRequest $request)
    {
        // dd($request);
        $formFields = $request->validated();
        // dd($formFields)

        Demande::create($formFields);
        return redirect()->route('demandes.show',Auth::guard('stagiaire')->user()->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Get the ID of the authenticated stagiaire
        $stagiaireId = Auth::guard('stagiaire')->user()->id;

        // Fetch demandes belonging to the authenticated stagiaire
        $demandes = Demande::where('stagiaire_id', $stagiaireId)
                            ->orderBy('created_at', 'asc')
                            ->get();

        // Return the view with the demandes and the stagiaire ID
        return view('demande.mydemende', compact('demandes', 'stagiaireId'));
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
