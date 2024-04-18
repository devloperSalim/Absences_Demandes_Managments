<?php

namespace App\Http\Controllers;

use App\Http\Requests\StagiaireRequest;
use App\Models\Demande;
use App\Models\Group;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login_form(){

        return view('stagiaire.login_form');
     }

     public function login(Request $request)
    {
        $credentials = $request->only('email_etu', 'password');

        // Attempt to authenticate the user
        // dd(Auth::guard('stagiaire')->attempt($credentials));
        if (Auth::guard('stagiaire')->attempt($credentials)) {
            // Authentication successful, redirect to the demand creation form
            return redirect()->route('demandes.create');
        } else {
            // Authentication failed, redirect back with error
            return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
        }
    }

    public function logout_stagiaire(Request $request){

        Auth::guard('stagiaire')->logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Regenerate the CSRF token
        $request->session()->regenerateToken();
        // Redirect the user to a desired route
        return redirect('/');
    }

    public function index()
    {

        $stagiaires = Stagiaire::all();
        $demandes = Demande::where('status', 'encour')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('stagiaire.list_stagiaire',compact('stagiaires','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        $demandes = Demande::where('status', 'encour')
            ->orderBy('created_at', 'desc')
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
    public function showDetails(Stagiaire $stagiaire)
    {
        $demandes = Demande::where('status', 'encour')
            ->orderBy('created_at', 'desc')
            ->get();


        return view('stagiaire.details_stagiaires',compact('stagiaire','demandes'));
    }

    public function show(Stagiaire $stagiaire)
    {

        $demandes = Demande::where('status', 'encour')
            ->orderBy('created_at', 'desc')
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
