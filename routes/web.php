<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('home');

Route::get('/aulab-studenti', [PublicController::class, 'index'])->name('students');

// Rotta PARAMETRICA
Route::get('/detail/student/{id}', [PublicController::class, 'showStudent'])->name('show.student');
