<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});



//////////////////////////////////////////////////////////training//////////////////////////////////////
Route::post('training/index', [TrainingController::class, 'index']);
Route::post('training/restore', [TrainingController::class, 'restore']);
Route::delete('training/delete', [TrainingController::class, 'destroy']);
Route::delete('training/force-delete', [TrainingController::class, 'forceDelete']);
Route::put('/training/{id}/{column}', [TrainingController::class, 'toggle']);
Route::apiResource('training', TrainingController::class);
//////////////////////////////////////////////////////////training//////////////////////////////////////

//////////////////////////////////////////////////////////package//////////////////////////////////////
Route::post('package/index', [PackageController::class, 'index']);
Route::post('package/restore', [PackageController::class, 'restore']);
Route::delete('package/delete', [PackageController::class, 'destroy']);
Route::delete('package/force-delete', [PackageController::class, 'forceDelete']);
Route::put('/package/{id}/{column}', [PackageController::class, 'toggle']);
Route::apiResource('package', PackageController::class);
//////////////////////////////////////////////////////////package//////////////////////////////////////


//////////////////////////////////////////////////////////restore////////////////////////////////////////
Route::post('result/index', [ResultController::class, 'index']);
Route::post('result/restore', [ResultController::class, 'restore']);
Route::delete('result/delete', [ResultController::class, 'destroy']);
Route::delete('result/force-delete', [ResultController::class, 'forceDelete']);
Route::put('/result/{id}/{column}', [ResultController::class, 'toggle']);
Route::apiResource('result', ResultController::class);
//////////////////////////////////////////////////////////result//////////////////////////////////////


//////////////////////////////////////////////////////////user//////////////////////////////////////
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);
Route::middleware('auth:sanctum')->get('check-auth', [UserController::class, 'checkAuth']);

Route::post('user/index', [UserController::class, 'index']);
Route::post('user/restore', [UserController::class, 'restore']);
Route::delete('user/delete', [UserController::class, 'destroy']);
Route::delete('user/force-delete', [UserController::class, 'forceDelete']);
Route::post('user/update/{user}', [UserController::class, 'forceUpdate']);
Route::put('/user/{id}/{column}', [UserController::class, 'toggle']);
Route::apiResource('user', UserController::class);

//////////////////////////////////////////////////////////user//////////////////////////////////////



////////////////////////////////////////// media ////////////////////////////////
Route::group(['middleware' => ['api']], static function () {
    Route::get('/media', [MediaController::class, 'index']);
    Route::get('/media/{media}', [MediaController::class, 'show']);
    Route::post('/media', [MediaController::class, 'store']);
    Route::delete('/media/{media}', [MediaController::class, 'destroy']);
    Route::get('/get-unused-media', [MediaController::class, 'getUnUsedImages']);
    Route::delete('/delete-unused-media', [MediaController::class, 'deleteUnUsedImages']);
});
Route::get('/get-media/{media}', [MediaController::class, 'show']);
Route::post('/media-array', [MediaController::class, 'showMedia']);
Route::post('/media-upload-many', [MediaController::class, 'storeMany']);
//////////////////////////////////////// media ////////////////////////////////



