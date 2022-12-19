<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InletterController;
use App\Http\Controllers\OutletterController;
use App\Models\Agenda;

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
    return view('test', [
        'agenda' => Agenda::latest()->get()
    ]);

    // return json_encode(Agenda::latest()->get());
});

Route::get('/getAgenda', function () {
    return json_encode(Agenda::latest()->get());
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'Dashboard']);
})->middleware('auth');

Route::resource('/categories', CategoryController::class)->except(['show'])->middleware('auth');
Route::resource('/outletters', OutletterController::class)->except(['show'])->middleware('auth');
Route::resource('/inletters', InletterController::class)->except(['show'])->middleware('auth');
Route::resource('/agenda', AgendaController::class)->except(['show'])->middleware('auth');