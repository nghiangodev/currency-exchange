<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\{HomesController,AboutUsController,ContactUsController,ExchangesController,ServicesController,NewsController};


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

Route::get('/', [HomesController::class,'index']);
Route::get('/about-us', [AboutUsController::class,'index']);
Route::get('/contact-us', [ContactUsController::class,'index']);
Route::get('/exchange', [ExchangesController::class,'index'])->name('exchange-currency');
Route::get('/exchange', [ExchangesController::class,'index']);
Route::get('/services', [ServicesController::class,'index']);
Route::get('/news', [NewsController::class,'index']);
