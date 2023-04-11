<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\PollingController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\PollOptionController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('poll', PollController::class);
Route::resource('poll-option', PollOptionController::class);

Route::post('poll/{poll}/vote', [PollOptionController::class, 'letsVote']);