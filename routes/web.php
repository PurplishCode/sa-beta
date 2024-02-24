<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\SessionController;
use App\Models\Foto;
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

Route::middleware("guest")->group(function() {
    Route::resource('/session', SessionController::class);

    Route::post('session.post', [SessionController::class, 'login'])->name("session.post");
});


Route::middleware(['auth'])->group(function(){
    Route::resource('/users/album', AlbumController::class);
    
    Route::resource('/users/foto', FotoController::class);
});