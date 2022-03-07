<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contacts/all', [ContactController::class, 'allData'])->name('contacts-data');
Route::get('/contacts/all/{id}/', [ContactController::class, 'messDetail'])->name('contacts-detail');
Route::get('/contacts/all/{id}/update', [ContactController::class, 'messUpdate'])->name('contacts-update');
Route::get('/contacts/all/{id}/delete', [ContactController::class, 'messDelete'])->name('contacts-delete');

Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::post('/contacts/all/{id}/update', [ContactController::class, 'updateMessSubmit'])->name('contact-update-submit');
