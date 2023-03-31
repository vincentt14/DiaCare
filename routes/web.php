<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicinesPage;
use App\Http\Controllers\SymptomController;
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
Route::get('/about', [AppController::class, 'about']);
Route::get('/medicinesPage', [AppController::class, 'medicine']);


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/dashboard', [DashboardController::class, 'user']);
Route::get('/adminDashboard', [DashboardController::class, 'admin']);

Route::resources([
    'symptoms' => SymptomController::class,
    'diseases' => DiseaseController::class,
    'medicines' => MedicineController::class,
]);



// Route::get('/discussion', function () {
//     return view('components.view');
// });

// Route::get('/create', function () {
//     return view('components.create');
// });