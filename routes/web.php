<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Persona;
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

Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/', function () { return view('dashboard');})->name('dashboard');
    Route::get('/persona', function () { return view('pages.persona.persona');});
    Route::get('/tipos/persona', function () { return view('pages.tipos-persona.tipos-persona');});
    Route::get('/plantilla', function () { return view('pages.plantilla');})->name('plantilla');
});


