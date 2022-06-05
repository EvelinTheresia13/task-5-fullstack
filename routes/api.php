<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:api')->group(function () {
    Route::get("profile", [ApiController::class, "profile"]);
});

Route::get("user",[ApiController::class, "getUser"]);
Route::post("add-user",[ApiController::class, "addUser"]);
Route::post("delete",[ApiController::class, "delete"]);

Route::post("login",[ApiController::class, "login"]);
