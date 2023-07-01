<?php

use App\Http\Controllers\autoEcole;
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

Route::get('/exam/accueil', function () {
    return view('accueil');
})->name('accueil');
Route::post('/exam/accueil',[autoEcole::class,"redirige"]);
Route::get('/exam/couv-B{id}',[autoEcole::class,"couv"])->name('couv');
Route::get('/exam/teste-B{id}',[autoEcole::class,"teste"])->name('teste');
Route::post('/exam/teste-B{id}',[autoEcole::class,"teste2"]);
Route::get('/exam/correction-B{id}',[autoEcole::class,"correction"])->name('correction');
Route::post('/exam/correction-B{id}',[autoEcole::class,"correction2"]); 
