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

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     });

//     Route::get('/stagaires', [StagaireController::class, 'index'])->name('stagaires.index');
//     Route::get('/stagaires/create', [StagaireController::class, 'create'])->name('stagaires.create');
//     Route::post('/stagaires', [StagaireController::class, 'store'])->name('stagaires.store');
//     Route::get('/stagaires/{registration_number}', [StagaireController::class, 'show'])->name('stagaires.show');
//     Route::get('/stagaires/{registration_number}/edit', [StagaireController::class, 'edit'])->name('stagaires.edit');
//     Route::put('/stagaires/{registration_number}', [StagaireController::class, 'update'])->name('stagaires.update');
//     Route::delete('/stagaires/{registration_number}',[StagaireController::class,'destroy'])->name('stagaires.destroy');
// });


