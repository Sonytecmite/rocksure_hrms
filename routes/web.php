<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  --------------------------Authentication Routes --------------------------
//  --------------------------------------------------------------------------
Route::prefix('admin/')->group(function(){

    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'loginUser']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/employee-form', [EmployeeController::class, 'employeeForm'])->name('employee-form');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});