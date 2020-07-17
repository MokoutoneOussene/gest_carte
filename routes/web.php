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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Routes pour etudiant
Route::get('etudiant/formulaire', 'EtudiantController@form');
Route::get('etudiant/list', 'EtudiantController@liste');
Route::post('etudiant/ajouter', 'EtudiantController@store');
Route::get('Etudiant/carte', 'EtudiantController@carte');
Route::post('etudiant/supp', 'EtudiantController@delete');


// Routes pour Niveau
Route::get('niveau/formulaire', 'NiveauController@form');
Route::get('niveau/list', 'NiveauController@liste');
Route::post('niveau/ajouter', 'NiveauController@store');


// Routes pour Fillière
Route::get('filliere/formulaire', 'FilliereController@form');
Route::get('filliere/list', 'FilliereController@liste');
Route::post('filliere/ajouter', 'FilliereController@store');


// Routes pour UFR
Route::get('ufr/formulaire', 'UfrController@form');
Route::get('ufr/list', 'UfrController@liste');
Route::post('ufr/ajouter', 'UfrController@store');


// Routes pour Nationalité
Route::get('nationalite/formulaire', 'NationaliteController@form');
Route::get('nationalite/list', 'NationaliteController@liste');
Route::post('nationalite/ajouter', 'NationaliteController@store');


