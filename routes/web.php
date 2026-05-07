<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\QwizController;

Route::get('/', [RegisterController::class, 'start']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/history', [SessionController::class, 'history']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::get('/themes', [ThemeController::class, 'create']);
Route::post('/themes', [ThemeController::class, 'store']);

Route::get('/main', [QwizController::class, 'view']);
Route::post('/main', [QwizController::class, 'nextQuestion']); 

Route::get('/result',[QwizController::class, 'viewResult']);
Route::post('/result',[QwizController::class, 'ResultButtons']);