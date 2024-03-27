<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\accepteConroller;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\ExcelImportController;

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

//login
Route::get('/login',[LoginController::class, 'show'])->name('login.show');
Route::post('/login',[LoginController::class, 'login'])->name('login');
//logout
Route::get('/logout',[LoginController::class, 'logout'])->name('logout.logout');
//groups routes
Route::resource('groups',GroupController::class);
//stagiaires routes
Route::resource('stagiaires',StagiaireController::class);
//absences routes
Route::get('/absences/alert', [AbsenceController::class, 'alert'])->name('absences.alert');
Route::resource('absences',AbsenceController::class);
//demande route
Route::get('/demandes/traiter', [DemandeController::class, 'traiter'])->name('demandes.traiter');

Route::resource('demandes',DemandeController::class);  
Route::post('/demandes/accepte', [accepteConroller::class,'accepte'])->name('demand.accepte');
Route::post('/demandes/delete', [accepteConroller::class,'delete'])->name('demand.delete');
 

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



// Route::get('/demandes',function (){
//     return view('demande.inbox_demande');
// })->name('list_demande');


// Route::get('/demande',function (){
//     return view('demande.demande');
// })->name('demande');
// Route::get('/mydemande',function (){
//     return view('demande.mydemende');
// })->name('mydemende');



// routes/web.php
Route::post('/import-excel/group', [ExcelImportController::class, 'importGroup'])->name('excel.group');
Route::post('/import-excel/stagiaire', [ExcelImportController::class, 'importStagiaire'])->name('excel.stagiaire');
Route::post('/import-excel/module', [ExcelImportController::class, 'importModule'])->name('excel.module');
Route::post('/import-excel/avancement', [ExcelImportController::class, 'avancement'])->name('excel.avance_module');
