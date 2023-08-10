<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/',[PostController::class,'index']);
Route::get('/about',[PostController::class,'about'])->name('about');
Route::get('/feedback',[PostController::class,'feedback'])->name('feedback');
Route::post('/savefeedback',[PostController::class,'savefeedback'])->name('savefeedback');
Route::get('/create', [PostController::class,'create']);
Route::post('/save', [PostController::class,'store'])->name('save');
Route::get('/show/{id}', [PostController::class,'show'])->name('show');
Route::get('/edit/{id}', [PostController::class,'edit'])->name('edit');
Route::put('/update/{id}', [PostController::class,'update'])->name('update');
Route::delete('remove/{id}', [PostController::class,'destroy'])->name('remove');
Route::get('/',[PostController::class,'search'])->name('search');