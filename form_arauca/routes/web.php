<?php



use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

//------------------------------------------------------------RUTAS--WEB----------------------------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home/participants/', [HomeController::class, 'participants'])->name('home.participants');
Route::get('home/show_participant/{nit}', [HomeController::class, 'show_participant'])->name('home.show_participant');
Route::post('home/save_participant', [HomeController::class, 'save_participant'])->name('home.save_participant');
Route::get('home/get_participants/', [HomeController::class, 'get_participants'])->name('home.get_participants');
Route::post('home/get_code', [HomeController::class, 'get_code'])->name('home.get_code');

Route::get('home/terminos_condiciones', [HomeController::class, 'terminos_condiciones'])->name('home.terminos_condiciones');
