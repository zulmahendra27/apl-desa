<?php

use App\Models\Agenda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminAgendaController;
use App\Http\Controllers\AdminGalleryController;
// use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminInletterController;
use App\Http\Controllers\AdminOutletterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/sejarah', [DashboardController::class, 'sejarah']);
Route::get('/visi-misi', [DashboardController::class, 'visiMisi']);
Route::get('/struktur', [DashboardController::class, 'struktur']);
Route::get('/agenda', [DashboardController::class, 'agenda']);
Route::get('/galleries', [DashboardController::class, 'galleries']);

Route::get('/getAgenda', function () {
    return json_encode(Agenda::latest()->get());
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->middleware('auth');

// Route::get('/dashboard/profile/checkKey', [AdminProfileController::class, 'checkKey'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show'])->middleware('auth');
Route::resource('/dashboard/outletters', AdminOutletterController::class)->except(['show'])->middleware('auth');
Route::resource('/dashboard/inletters', AdminInletterController::class)->except(['show'])->middleware('auth');
Route::resource('/dashboard/agenda', AdminAgendaController::class)->except(['show'])->middleware('auth');
// Route::resource('/dashboard/profile', AdminProfileController::class)->except(['show', 'destroy'])->middleware('auth');
Route::resource('/dashboard/galleries', AdminGalleryController::class)->except(['show', 'edit', 'update'])->middleware('auth');
