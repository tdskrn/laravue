<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getDepartments', [DepartmentController::class, 'getDepartments'])->middleware('auth:api');
Route::post('storeDepartment', [DepartmentController::class, 'storeDepartment'])->middleware('auth:api');
Route::post('updateDepartment/{id}', [DepartmentController::class, 'updateDepartment'])->middleware('auth:api');
Route::post('deleteDepartment/{id}', [DepartmentController::class, 'deleteDepartment'])->middleware('auth:api');
