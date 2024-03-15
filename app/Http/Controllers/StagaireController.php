<?php

namespace App\Http\Controllers;

use App\Models\Stagaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Static_;

class StagaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stagaires = Stagaire::all();
        return view('stagaires.index')->with([
            'stagaires' => $stagaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stagaires.create')->with([

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'registration_number' => 'required|integer|unique:stagaires,registration_number',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|min:9|max:15|confirmed', // Allow empty password field during update
            'phone' => 'required|string|max:20',
            'hire_date' => 'required|date',
        ]);



        Stagaire::create($request->all());
        return redirect()->route('stagaires.index')->with('success', 'Stagaire added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($registration_number)
    {
        $stagaire = Stagaire::where('registration_number',$registration_number)->first();

        if(!$stagaire){
            return redirect()->route('stagaires.index')->with('error','stagaire not found');
        }

        return view('stagaires.show',compact('stagaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($registration_number)
    {
        $stagaire = Stagaire::where('registration_number',$registration_number)->firstOrFail();
        return view('stagaires.edit',compact('stagaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $registration_number)
    {
        $stagaire = Stagaire::where('registration_number', $registration_number)->firstOrFail();

        $this->validate($request, [
            'registration_number' => 'required|numeric|unique:stagaires,registration_number,' . $stagaire->id,
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|min:9|max:15|confirmed', // Allow empty password field during update
            'phone' => 'required|string|max:20',
            'hire_date' => 'required|date',
        ]);

        $data = $request->except('_token', '_method');

        if ($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $stagaire->update($data);

        return redirect()->route('stagaires.index')->with('success', 'Employee updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($registration_number)
    {
        $stagaire = Stagaire::where('registration_number', $registration_number)->firstOrFail();

        // Delete the employee record
        $stagaire->delete();

        return redirect()->route('stagaires.index');
    }
}
