<?php

use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/transazioni', function () {

    dd(request()->query('date'));

   // return TransactionResource::collection(Transaction::all());

    $date = Carbon::today();
    $transaction = Transaction::whereDate('created_at', '=', $date)->get();

    return TransactionResource::collection($transaction);

});

//
//Route::get('/transazioni/{newdate}', function ($date, Request $request) {
//
//dd($request);
//
//    $date = Carbon::parse($date);
//    $transaction = Transaction::whereDate('created_at', '=', $date)->get();
//
//    return TransactionResource::collection($transaction);
//
//});
