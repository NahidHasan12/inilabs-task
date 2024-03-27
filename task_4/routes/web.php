<?php

use App\Http\Controllers\To_do_Controller;
use Illuminate\Support\Facades\Auth;
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
    return view('to_do_curd.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// To-Do CURD Route
Route::get('/to_do', [To_do_Controller::class, 'index'])->name('table');
Route::get('/to_do/add_people', [To_do_Controller::class, 'add_people'])->name('add_people');
Route::post('/to_do/add_people/store', [To_do_Controller::class, 'store'])->name('store');

Route::get('/to_do/edit_people/{id}', [To_do_Controller::class, 'edit_people'])->name('edit');
Route::put('/to_do/update_people/{id}', [To_do_Controller::class, 'update_people'])->name('update');

Route::get('/to_do/delete/{id}', [To_do_Controller::class, 'delete'])->name('delete');

