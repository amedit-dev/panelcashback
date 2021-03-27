<?php

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\TransactionResource;

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




Route::get('/transazioni/addtransazioni', [App\Http\Controllers\TransactionController::class, 'create'])->name('transaction.create');
Route::get('/addtransazioni', [App\Http\Controllers\TransactionController::class, 'create'])->name('transaction.create');

Route::post('/addtransazioni', [App\Http\Controllers\TransactionController::class, 'store'])->name('transaction.store');


Route::get('/addtransazioni/{user}/{transaction}/grazie', [App\Http\Controllers\UserController::class, 'create'] )->name('user.create');
Route::post('/addtransazioni/{user}/{transaction}/grazie', [App\Http\Controllers\UserController::class,  'store'])->name('user.store');


Route::get('/transazioni', [App\Http\Controllers\TransactionController::class, 'index'])->name('transaction.index');

Route::post('/transazioni', [App\Http\Controllers\TransactionController::class, 'showdate'])->name('transaction.showdate');

Route::get('/transazioni/{newdate}', [App\Http\Controllers\TransactionController::class, 'show'])->name('transaction.show');





//Route::get('/user', function () {
//    return new UserResource(User::find(1));
//});
//
//Route::get('/t', function () {
//    return new TransactionResource(Transaction::all()->first());
//});
//
//Route::get('/t2', function () {
//    return TransactionResource::collection(Transaction::all());
//
//});
//
//
//Route::get('/users', function () {
//    return new UserCollection(User::all());
//});

