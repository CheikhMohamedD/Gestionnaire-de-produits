<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ListeController;


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

Route::get('/', [ConnexionController::class, 'index'])->name('index');
Route::get('/connexion', [ConnexionController::class, 'form'])->name('form');
Route::post('/connexion', [ConnexionController::class, 'traite'])->name('traite');
Route::get('/accueil', [ConnexionController::class, 'bienvenue'])->name('bienvenue');
Route::get('/deconnexion', [ConnexionController::class, 'deconnexion'])->name('deconnexion');

Route::get('/inscription', [InscriptionController::class, 'formulaire'])->name('formulaire');
Route::post('/inscription', [InscriptionController::class, 'traitement'])->name('traitement');

Route::get('/ajout', [ListeController::class, 'add'])->name('add');
Route::get('/liste', [ListeController::class, 'index'])->name('index');
Route::post('/ajout-produit', [ListeController::class, 'store'])->name('store');
Route::get('/modifier/{id}', [ListeController::class, 'updateForm']);
Route::put('/modifier/{id}', [ListeController::class, 'modifier'])->name('modifier');
Route::get('/supprimer/{id}', [ListeController::class, 'supprimer'])->name('supprimer');
Route::get('/detail/{id}', [ListeController::class, 'detail'])->name('detail');














