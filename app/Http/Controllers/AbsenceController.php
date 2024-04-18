<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbsenceRequest;
use App\Models\Absence;
use App\Models\Demande;
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
    $demandes = Demande::orderBy('created_at','desc')
    ->limit(5)
    ->get();

    return view('absence.liste-absence', compact('absences', 'stagiaires','demandes'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    $stagiaireId = $request->query('stagiaire_id');
    $demandes = Demande::where('status', 'encour')
    ->orderBy('created_at', 'desc')
    ->get();
    // Pass $stagiaireId to the view using compact or any other method
    // return view('absence.stagiaire_absence', compact('stagiaireId','demandes'));
    $stagiaire = Stagiaire::find($request->stagiaire_id);
    $absences = Absence::where('stagiaire_id', $request->stagiaire_id)->get();
    $count = Absence::where('stagiaire_id', $request->stagiaire_id)->count();
    // dd($absences);
    // Pass $stagiaireId to the view using compact or any other method
    return view('absence.stagiaire_absence', compact('stagiaire','absences','demandes','count'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(AbsenceRequest $request)
    {


        $formFields = $request->validated();
        // dd($formFields);
        Absence::create($formFields);
        // return view('absence.liste-absence');
        return redirect()->route('absences.index');
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

    public function showAbsenceNumbers()
    {

        $stagiaires = Stagiaire::with('group')->get();

        $absenceNumbers = [];

        foreach ($stagiaires as $stagiaire) {
            $justifiedCount = 0;
            $unjustifiedCount = 0;

            foreach ($stagiaire->absences as $absence) {
                if ($absence->type_abs === 'Justifie') {
                    $justifiedCount += $absence->nbr_hour;
                } elseif ($absence->type_abs === 'Injustifie') {
                    $unjustifiedCount += $absence->nbr_hour;
                }
            }
            $absenceNumbers[] = [
                'nom' => $stagiaire->nom,
                'prenom' => $stagiaire->prenom,
                'group' => $stagiaire->group->code_group,
                'justified' => $justifiedCount,
                'unjustified' => $unjustifiedCount,
            ];
        }
        // dd($absenceNumbers);

        return view('absence.alert', compact('absenceNumbers' ));
    }


    // stagiaire qui passe un conseil Discipline
    public function  conseilDiscipline(){

        $stagiaires = Stagiaire::with('group')->get();

        $absenceNumbers = [];

        foreach ($stagiaires as $stagiaire) {
            $justifiedCount = 0;
            $unjustifiedCount = 0;

            foreach ($stagiaire->absences as $absence) {
                if ($absence->type_abs === 'Justifie') {
                    $justifiedCount += $absence->nbr_hour;
                } elseif ($absence->type_abs === 'Injustifie') {
                    $unjustifiedCount += $absence->nbr_hour;
                }
            }
            if($unjustifiedCount >= 40){
                $absenceNumbers[] = [
                    'nom' => $stagiaire->nom,
                    'prenom' => $stagiaire->prenom,
                    'group' => $stagiaire->group->code_group,
                    'justified' => $justifiedCount,
                    'unjustified' => $unjustifiedCount,
                ];
            }
        }
        // dd($absenceNumbers);

        return view('stagiaire.list_stagiaire_conseil' ,compact('absenceNumbers'));
    }




}
