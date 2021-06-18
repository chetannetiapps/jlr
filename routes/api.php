<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MachineController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/devicelist/{id?}', [DeviceController::class, 'lists']);

Route::post('/adddevice',[DeviceController::class, 'add']);

Route::put('/updatedevice',[DeviceController::class, 'update']);
Route::get('/searchdevice/{name}',[DeviceController::class, 'search']);

Route::delete('/deletedevice/{id}', [DeviceController::class, 'delete']);

Route::get('/devicemachinelist/', [MachineController::class, 'list']);