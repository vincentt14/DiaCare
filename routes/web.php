<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicinesPage;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\UserController;
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




Route::get('/', [AppController::class, 'index']);
Route::get('/diagnose', [AppController::class, 'diagnose']);
Route::get('/about', [AppController::class, 'about']);
Route::get('/medicinesPage', [AppController::class, 'medicine']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'user'])->middleware('auth');
Route::get('/adminDashboard', [DashboardController::class, 'admin'])->middleware('admin');

Route::get('/rules', [AppController::class, 'logicRelation']);
Route::get('/rules/{id}/edit', [AppController::class, 'edit']);

Route::resources([
    'symptoms' => SymptomController::class,
    'diseases' => DiseaseController::class,
    'medicines' => MedicineController::class,
    'users' => UserController::class,
]);



// Route::get('/discussion', function () {
//     return view('components.view');
// });