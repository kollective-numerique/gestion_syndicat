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
Route::get('/login', [AgentController::class, 'index'])->name('agents.login');
