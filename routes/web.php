<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController as GuestComicController;

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
    return view('guest.pages.home');
});
Route::get('/comics', [GuestComicController::class, 'index'])->name('guest.comics.index');
Route::get('/comics/{id}', [GuestComicController::class, 'show'])->name('guest.comics.show');;
