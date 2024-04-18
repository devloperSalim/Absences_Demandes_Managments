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
use App\Http\Controllers\InitializeDatabaseController;
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
    Route::get('/this/for/admin/only', function () {
        return view('admin_login');
    });
    Route::get('/not_found', function () {
        return view('not_found');
    });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::middleware(['admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('groups', GroupController::class);
    Route::get('/stagiaires/details/{stagiaire}', [StagiaireController::class ,'showDetails'])->name('stagiaires.details');;
    Route::resource('stagiaires', StagiaireController::class);

    Route::get('/demandes',[DemandeController::class, 'index'])->name('demandes.index');
    Route::get('/absences/alert', [AbsenceController::class, 'showAbsenceNumbers'])->name('absences.alert');
    Route::get('/absences/alert/stagiaires', [AbsenceController::class, 'conseilDiscipline'])->name('absences.alertStagiaire');
    Route::resource('absences', AbsenceController::class);
    //demande route
    Route::get('/demandes/traiter', [DemandeController::class, 'traiter'])->name('demandes.traiter');
    Route::post('/demandes/accepte', [accepteConroller::class,'accepte'])->name('demand.accepte');
    Route::post('/demandes/delete', [accepteConroller::class,'delete'])->name('demand.delete');
    // exel import
    Route::post('/import-excel/group', [ExcelImportController::class, 'importGroup'])->name('excel.group');
    Route::post('/import-excel/stagiaire', [ExcelImportController::class, 'importStagiaire'])->name('excel.stagiaire');
    Route::post('/import-excel/module', [ExcelImportController::class, 'importModule'])->name('excel.module');
    Route::post('/import-excel/avancement', [ExcelImportController::class, 'avancement'])->name('excel.avance_module');
    // initialize database
    Route::get('/initialize-database', [InitializeDatabaseController::class, 'initialize'])->name('initialize.database');
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






require __DIR__.'/auth.php';
