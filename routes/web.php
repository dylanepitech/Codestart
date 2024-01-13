<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LearnController;
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

Route::get('/',[HomeController::class,'view'])->name('Home.index');
Route::get('/inscription',[InscriptionController::class,'view'])->name('Inscription.index');
Route::get('/connexion',[ConnexionController::class,'view'])->name('Connexion.index');
Route::get('/learn',[LearnController::class,'view'])->name('Learn.index')->middleware('auth');

Route::post('/inscription',[InscriptionController::class,'validation'])->name('Inscription.validation');
Route::post('/connexion',[ConnexionController::class,'connexion'])->name('Connexion.index');
Route::get('/logout',[ConnexionController::class,'deconexion'])->name('logout')->middleware('auth');

Route::get('/information',[InformationController::class,'view'])->name('Information.index')->middleware('auth');
Route::post('/information',[InformationController::class,'modification'])->name('Information.modification')->middleware('auth');

Route::get('/learn-html',[LearnController::class,'viewhtml'])->name('Html.index')->middleware('auth');

Route::get('/quizzhtml',[LearnController::class,'viewquizzhtml'])->name('Quizzhtml.index')->middleware('auth');
Route::post('/quizzhtml',[LearnController::class,'quizzhtml'])->name('Quizzhtml.post')->middleware('auth');

Route::get('/learn-css',[LearnController::class,'viewcss'])->name('Css.index')->middleware('auth');