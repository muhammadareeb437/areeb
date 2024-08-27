<?php

use App\Http\Controllers\DataController;
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
    return view('welcome');
});

Route::get('/form',[DataController::class,'index']);
Route::post('/form',[DataController::class,'getData']);
Route::get('/show',[DataController::class,'showData'])->name('show');
Route::get('/update/{id}',[DataController::class,'update']);
Route::post('/updatedata',[DataController::class,'updateData']);


