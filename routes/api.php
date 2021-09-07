<?php

use App\Http\Controllers\API\V1\Auth\LoginController;
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

// API V1
Route::group([
    'as' =>         'api.v1.',
    'prefix' =>     'v1',
], function () {
    // API V1 LoginController
    Route::post('auth/login-user', [LoginController::class, 'loginUser'])->name('auth.login-user');
});
