<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;

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

Route::controller(HomeController::class)->group(function() {
    Route::get('/search', 'search')->name('search');
});

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/pustakawan', 'librarian');
Route::view('/contact', 'contact');

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/signin', 'signin')->name('signin');
    Route::get('/signout', 'signout')->name('signout');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('report', [ReportController::class, 'index'])->name('report');
    Route::get('export', [ReportController::class, 'exportPDF'])->name('export');
    Route::resources([
        'books'         => BookController::class,
        'transactions'  => TransactionController::class,
        'users'         => UserController::class
    ]);
    Route::get('students', [UserController::class, 'index'])->name('users.student');
    Route::get('librarians', [UserController::class, 'index'])->name('users.librarians');
});

Route::post('borrow', [HomeController::class, 'borrow'])->name('borrow');