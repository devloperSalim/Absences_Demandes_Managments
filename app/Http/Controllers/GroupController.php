<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Demande;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        $demandes = Demande::orderBy('created_at','desc')
        ->limit(5)
        ->get();
 
        return view('group.list_groupe',compact('groups','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $demandes = Demande::orderBy('created_at','desc')
        ->limit(5)
        ->get();
        return view('group.Ajouter_group' ,compact('demandes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {

        $formFields = $request->validated();
        Group::create($formFields);
        return redirect()->route('groups.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $stagiaires = $group->stagiaires;
        // $nbr_stagiaires = $group->stagiaires->count() + 1;
        // dd($nbr_stagiaires);
        $demandes = Demande::orderBy('created_at','desc')
        ->limit(5)
        ->get();
        return view('group.show-detail-group', compact('group', 'stagiaires','demandes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
