<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('accueil');
Route::get('/reglement', [HomeController::class, 'reglement'])->name('reglement');
Route::get('/adhesion', [HomeController::class, 'adhesion'])->name('adhesion');
Route::post('/adhesion', [HomeController::class, 'adhesion_save'])->name('adhesion.save');
Route::get('/login', [AgentController::class, 'index'])->name('agents.login');
Route::post('/login', [AgentController::class, 'login'])->name('agents.login.post');
Route::get('/dashboard', [AgentController::class, 'dashboard'])->middleware('IsLoggedIn')->name('agents.dashboard');
Route::get('/logout', [AgentController::class, 'logout'])->middleware('IsLoggedIn')->name('agents.logout');
Route::get('/syndicats/membres', [AgentController::class, 'membres_syndicat'])->middleware('IsLoggedIn')->name('agents.syndicat');
Route::get('/syndicats/membres/update/{id}', [AgentController::class, 'update_membres_syndicat'])->middleware('IsLoggedIn')->name('agents.syndicat.update');
Route::post('/syndicats/membres/update/{id}', [AgentController::class, 'update_membres_syndicat'])->middleware('IsLoggedIn')->name('agents.syndicat.update');
Route::get('/syndicats/membres/delete/{id}', [AgentController::class, 'delete_membres_syndicat'])->middleware('IsLoggedIn')->name('agents.syndicat.delete');
Route::get('/syndicats/federation', [AgentController::class, 'membres_federation'])->middleware('IsLoggedIn')->name('agents.federation');
Route::get('/syndicats/employe', [AgentController::class, 'membres_employe'])->middleware('IsLoggedIn')->name('agents.employe');
Route::get('/agent/chnagePsw', [AgentController::class, 'change_pswd'])->middleware('IsLoggedIn')->name('agents.password');