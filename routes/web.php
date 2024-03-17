<?php

use App\Http\Controllers\StagaireController;
use Database\Factories\StagaireFactory;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('dashbord.home');
})->name('home');

 
Route::get('/group',function(){
    return view('dashbord.list_groupe');
})->name('list_groupe');
Route::get('/group/create',function(){
    return view('dashbord.Ajouter_group');
})->name('add_group');


Route::get('/stagiaire',function(){
    return view('dashbord.list_stagiaire');
})->name('list_stagiaire');
Route::get('/stagiaire/create',function(){
    return view('dashbord.ajouter_stagiaire');
})->name('add_stagiaire');
Route::get('/stagiaire/absence',function(){
    return view('dashbord.stagiaire_absence');
})->name('stagiaire_absence');
Route::get('/stagiaire/update',function(){
    return view('dashbord.update_absence');
})->name('update_absence');
