<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/campaign/index', [
    'App\Http\Controllers\CampaignController',
    'index',
]);
Route::post('/campaign/store', [
    'App\Http\Controllers\CampaignController',
    'store',
]);
Route::get('/campaign/{id}', [
    'App\Http\Controllers\CampaignController',
    'show',
]);
Route::put('/campaign/{id}', [
    'App\Http\Controllers\CampaignController',
    'update',
]);
