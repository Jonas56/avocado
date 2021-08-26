<?php

use App\Http\Controllers\LawyerCaseController;

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

Route::apiResource('/cases', LawyerCaseController::class)->parameters([
    'cases' => 'lawyer_case',
]);