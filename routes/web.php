<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\accepteConroller;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\HomeController;
use App\Models\Stagiaire;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::middleware(['admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('groups', GroupController::class);
    Route::resource('stagiaires', StagiaireController::class);

    Route::get('/demandes',[DemandeController::class, 'index'])->name('demandes.index');
    Route::get('/absences/alert', [AbsenceController::class, 'alert'])->name('absences.alert');
    Route::resource('absences', AbsenceController::class);
    //demande route
    Route::get('/demandes/traiter', [DemandeController::class, 'traiter'])->name('demandes.traiter');
    Route::post('/demandes/accepte', [accepteConroller::class,'accepte'])->name('demand.accepte');
    Route::post('/demandes/delete', [accepteConroller::class,'delete'])->name('demand.delete');

});

Route::middleware(['stagiaire'])->group(function () {
    Route::get('/demande/create', function () {
        return view('demande.create');
    })->name('demandes.create');
    Route::get('/demandes/create',[DemandeController::class, 'create'])->name('demandes.create');
    Route::post('/demandes', [DemandeController::class, 'store'])->name('demandes.store');
    Route::get('/demandes/{demande}',[DemandeController::class, 'show'])->name('demandes.show');


    // Other routes for stagiaire users...
});

Route::get('/stagiaire/login', [StagiaireController::class, 'login_form'])->name('login_form');
Route::post('/stagiaire/login', [StagiaireController::class, 'login'])->name('login.stagiaire');
Route::get('/stagiaire/logout', [StagiaireController::class, 'logout_stagiaire'])->name('logout.stagiaire');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//groups routes





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


require __DIR__.'/auth.php';
