<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TripStationController;
use App\Http\Controllers\Api\StationController;

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

//station
Route::get('data/{from}/{to}', [StationController::class , 'getStationData']);




Route::get('/trip/{from}/{to}', [TripStationController::class, 'getListOfTrainsAndTrips']);

Route::get('/tripId/{from}/{to}', [TripStationController::class, 'getListOfTrainsAndTripsWithId']);
