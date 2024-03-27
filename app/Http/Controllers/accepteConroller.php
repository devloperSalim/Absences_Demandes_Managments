<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class accepteConroller extends Controller
{
    public function accepte(Request $request)
    {
        $selectedIds = $request->selectedIds; 
      
        Demande::whereIn('id', $selectedIds)->update(['status' => 'traiter']); 
    
        return response()->json(['message' => 'change status demande successfully.']);
    }
    public function delete(Request $request)
    {
        $selectedIds = $request->selectedIds; 
      
  
        Demande::whereIn('id', $selectedIds)->delete();
    
        return response()->json(['message' => 'delete demande successfully.']);
    }
}
