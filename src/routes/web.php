<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

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


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/quizy', [App\Http\Controllers\HomeController::class, ''])->name('home');
// Route::get('/quizy/{id}', [App\Http\Controllers\HelloController::class, 'quizIndex']);
// Route::get('/quizy', [App\Http\Controllers\HelloController::class, 'quiz']);


// Route::get('/admin', [App\Http\Controllers\HelloController::class, 'adminIndex']);
// Route::post('/admin', [App\Http\Controllers\HelloController::class,'create']);


// Route::get('/admin/{question_Id}', [App\Http\Controllers\HelloController::class,'show']);

// Route::post('/admin/{question_Id}', [App\Http\Controllers\HelloController::class,'update']);

// Route::get('/admin/{questionId}', [App\Http\Controllers\HelloController::class,'adminDelete']);



// 以下Webapp
Route::get('/webapp', [App\Http\Controllers\HelloController::class,'studyDate']);

