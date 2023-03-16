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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/medicines', function () {
    return view('pages.medicines');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::get('/config', function(){
    return view('components.config');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

// Route::get('/discussion', function () {
//     return view('components.view');
// });

// Route::get('/create', function () {
//     return view('components.create');
// });