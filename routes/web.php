<?php

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
    return view('layouts.accueil');
});

Route::get('apropo', function () {
    return view('layouts.apropo');
});

Route::get('programmes', function () {
    return view('layouts.programme');
});

Route::get('facultes', function () {
    return view('layouts.facultes');
});

Route::get('formations', function () {
    return view('layouts.formations');
});

Route::get('contact', function () {
    return view('layouts.contact');
});

// Etudiant --------------------------
// training
Route::get('training', function () {
    return view('layouts.etudiants.training');
});

Route::get('adhession', function () {
    return view('layouts.etudiants.adhession');
});

Route::get('paiement', function () {
    return view('layouts.etudiants.paie');
});

Route::get('bibliotheque', function () {
    return view('layouts.etudiants.bibliotheque');
});

Route::get('document', function () {
    return view('layouts.etudiants.doc');
});

Route::get('programmes', function () {
    return view('layouts.etudiants.programmes');
});

Route::get('resultats', function () {
    return view('layouts.etudiants.resultats');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
