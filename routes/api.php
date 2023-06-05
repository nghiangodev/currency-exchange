<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CurrencyExchangeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'currency', 'middleware' =>  ['api', 'cors']], function() {
    Route::get('list', [CurrencyExchangeController::class, 'getList '])->name('list');
    Route::get('request-currency', [CurrencyExchangeController::class, 'requestCurrency'])->name('request_currency');
});



