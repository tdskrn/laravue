<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/** ROTAS DEPARTMENTS */

Route::get('departments/index', [DepartmentController::class, 'index'])->name('departmentsIndex');
Route::get('departments/create', [DepartmentController::class, 'create'])->name('departmentsCreate');
Route::post('departments/store', [DepartmentController::class, 'store'])->name('departmentsStore');
Route::get('departments/edit/{id}', [DepartmentController::class, 'edit'])->name('departmentsEdit');
Route::post('departments/update/{id}', [DepartmentController::class, 'update'])->name('departmentsUpdate');
Route::post('departments/delete/{id}', [DepartmentController::class, 'delete'])->name('departmentsDelete');


/** ROTAS USERS */
Route::get('users/index', [UserController::class, 'index'])->name('usersIndex');


Route::get('roles', function () {
    return view('roles');
})->name('roleVue');
