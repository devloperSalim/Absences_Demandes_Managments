<?php

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
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
 
Route::get('/group',function(){
    return view('group.list_groupe');
})->name('list_groupe');
Route::get('/group/create',function(){
    return view('group.Ajouter_group');
})->name('add_group');


Route::get('/stagiaire',function(){
    return view('stagiaire.list_stagiaire');
})->name('list_stagiaire');
Route::get('/stagiaire/create',function(){
    return view('stagiaire.ajouter_stagiaire');
})->name('add_stagiaire');
Route::get('/stagiaire/absence',function(){
    return view('absence.stagiaire_absence');
})->name('stagiaire_absence');
Route::get('/stagiaire/update',function(){
    return view('absence.update_absence');
})->name('update_absence');


Route::get('/modules',function (){
    return view('module.list_module');
})->name('list_module');
Route::get('/modules/avancement',function (){
    return view('module.avencemen');
})->name('info_module');

Route::get('/modules/alert_avancement',function (){
    return view('module.alert_avancement');
})->name('avancement');

Route::get('/demandes',function (){
    return view('demande.inbox_demande');
})->name('list_demande');