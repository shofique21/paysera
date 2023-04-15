<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/all-accounts', [App\Http\Controllers\AccountController::class, 'index'])->name('allaccounts');
Route::get('/private-accounts', [App\Http\Controllers\AccountController::class, 'private_account'])->name('privateaccounts');
Route::get('/business-accounts', [App\Http\Controllers\AccountController::class, 'business_account'])->name('businessaccounts');
Route::get('/all-currency', [App\Http\Controllers\CurrencyController::class, 'index'])->name('allcurrency');
Route::get('/all-transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('alltransaction');
Route::get('/all-withdraw-transaction', [App\Http\Controllers\TransactionController::class, 'withdrawTransaction'])->name('withdrawtransaction');
Route::get('/all-deposit-transaction', [App\Http\Controllers\TransactionController::class, 'depositTransaction'])->name('depositetransaction');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
