<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;

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

Route::get('/apoteks', [ApotekController::class, 'index']);
Route::get('/apoteks/create', [ApotekController::class, 'create']);
Route::post('/apoteks/store', [ApotekController::class, 'store']);
Route::get('/apoteks/{id}', [ApotekController::class, 'show']);
Route::get('/apoteks/edit/{id}', [ApotekController::class, 'edit']);
Route::patch('/apoteks/update/{id}', [ApotekController::class, 'update'])->name('update');
Route::delete('/apoteks/delete/{id}', [ApotekController::class, 'destroy']);

Route::get('/apoteks-ban', [ApotekController::class, 'apotekBanned']);
Route::get('/apoteks-restore/{id}', [ApotekController::class, 'restore']);
Route::get('/apoteks-permanent/delete/{id}', [ApotekController::class, 'permanentDelete']);







 




