<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/not_found',function (){
    return view('not_found');
});
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//groups routes
Route::resource('groups',GroupController::class);
//stagiaires routes
Route::resource('stagiaires',StagiaireController::class);



Route::get('/stagiaire/absence',function(){
    return view('absence.stagiaire_absence');
})->name('stagiaire_absence');
Route::get('/stagiaire/update',function(){
    return view('absence.update_absence');
})->name('update_absence');


Route::get('/modules',function (){
    return view('module.list_module');
})->name('list_module');

Route::get('/modules/id',function (){
    return view('module.module');
})->name('module');

Route::get('/modules/ajoute',function (){
    return view('module.ajouter_module');
})->name('ajoute_module');

Route::get('/modules/ajoute-avancement',function (){
    return view('module.ajoute_avancemant');
})->name('ajoute_avancement');

Route::get('/modules/avancement',function (){
    return view('module.avencemen');
})->name('info_module');

Route::get('/modules/alert_avancement',function (){
    return view('module.alert_avancement');
})->name('avancement');



Route::get('/demandes',function (){
    return view('demande.inbox_demande');
})->name('list_demande');
