<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search/provinces', [APIController::class, 'searchProvince'])->name('province.search');
Route::get('/search/cities', [APIController::class, 'searchCity'])->name('city.search');
Route::get('/province/import', [APIController::class, 'importProvince'])->name('province.import');
Route::get('/city/import', [APIController::class, 'importCity'])->name('city.import');