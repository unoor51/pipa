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


Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
Route::post('/checkinlist', [App\Http\Controllers\Api\CheckInListController::class, 'checkinlist'])->name('checkinlist');
Route::post('/incidentreport', [App\Http\Controllers\Api\IncidentReportController::class, 'incidentreport'])->name('incidentreport');

Route::group(['middleware' => ['auth:sanctum'] ], function(){

});