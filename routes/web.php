<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeaderController;
use App\Http\Livewire\Contacts;
<<<<<<< HEAD
=======
use App\Http\Livewire\Searchall;
>>>>>>> d9613e1 (added search module)

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
});

//contact page
Route::get('/contact', [HeaderController::class, 'contact'])->name('contact');
// Route::get('/contact', Contacts::class)->name('contact');
Route::get('/home', [HeaderController::class, 'home'])->name('home');
<<<<<<< HEAD
=======
// search
Route::get('/search-product', Searchall::class)->name('search');
>>>>>>> d9613e1 (added search module)
