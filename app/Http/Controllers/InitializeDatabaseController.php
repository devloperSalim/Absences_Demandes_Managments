<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InitializeDatabaseController extends Controller
{
    public function initialize()
{
    // Disable foreign key checks
    DB::statement('SET FOREIGN_KEY_CHECKS=0');

    try {
        // Truncate the tables in the correct order
        DB::table('absences')->truncate();
        DB::table('demandes')->truncate();
        DB::table('stagiaires')->truncate();
        DB::table('groups')->truncate();
        
        return redirect()->route('home')->withSuccess('Database initialized successfully.');
    } catch (\Exception $e) { 
        
        // Enable foreign key checks before returning
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        // Redirect with error message
        return redirect()->route('home')->withError('An error occurred while initializing the database.');
    }
}

}
