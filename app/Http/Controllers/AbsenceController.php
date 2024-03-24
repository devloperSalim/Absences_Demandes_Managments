<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbsenceRequest;
use App\Models\Absence;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $absences = Absence::orderBy('created_at', 'DESC')->paginate(10);
    $stagiaires = Stagiaire::all();

    return view('absence.liste-absence', compact('absences', 'stagiaires'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    $stagiaireId = $request->query('stagiaire_id');

    // Pass $stagiaireId to the view using compact or any other method
    return view('absence.stagiaire_absence', compact('stagiaireId'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(AbsenceRequest $request)
    {

        $formFields = $request->validated();
        // dd($formFields);
        Absence::create($formFields);
        return view('absence.liste-absence');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absence $absence)
    {
        // return view('')
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absence $absence)
    {
        return view('absence.update_absence');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absence $absence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absence $absence)
    {
        //
    }
}
