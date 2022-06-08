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
});

// --------------------------- Employee Routes----------------------------------
// -----------------------------------------------------------------------------
Route::prefix('admin/')->group(function(){
    
    // Route::get('/employee-form/upload-photo', [EmployeeController::class, 'employeePhoto'])->name('upload-photo');
    // Route::post('/employee-form/upload-photo', [EmployeeController::class, 'uploadPhoto'])->name('employee-photo');

    Route::get('/employee-form/employee-full-details', [EmployeeController::class, 'employeeFullDetails'])->name('employee-details');
    Route::post('/employee-form/employee-full-details', [EmployeeController::class, 'saveEmployeeFullDetails'])->name('employee-details');
    
    Route::get('/employee-form/emergency-contacts', [EmployeeController::class, 'emergencyContactsDetails'])->name('emergency-contacts');
    Route::post('/employee-form/emergency-contacts', [EmployeeController::class, 'saveEmergencyContactsDetails'])->name('emergency-contacts');

    Route::get('/employee-form/dependants', [EmployeeController::class, 'employeeDependants'])->name('employee-dependants');
    Route::post('/employee-form/dependants', [EmployeeController::class, 'saveEmployeeDependants'])->name('employee-dependants');

    Route::get('/employee-form/nextofkins', [EmployeeController::class, 'employeeNextOfKin'])->name('nextofkin');
    Route::post('/employee-form/nextofkins', [EmployeeController::class, 'saveEmployeeNextOfKin'])->name('nextofkin');
    
    Route::get('/employee-form/education', [EmployeeController::class, 'employeeEducation'])->name('employee-education');
    Route::post('/employee-form/education', [EmployeeController::class, 'saveEmployeeEducation'])->name('employee-education');
    
    Route::get('/employee-form/certifications', [EmployeeController::class, 'employeeCertification'])->name('employee-certifications');
    Route::post('/employee-form/certifications', [EmployeeController::class, 'saveEmployeeCertification'])->name('employee-certifications');
    
    Route::get('/employee-form/employment-history', [EmployeeController::class, 'employeeEmploymentHistory'])->name('employment-history');
    Route::post('/employee-form/employment-history', [EmployeeController::class, 'saveEmployeeEmploymentHistory'])->name('employment-history');

    Route::get('/employee-form/other-details', [EmployeeController::class, 'employeeOtherDetails'])->name('other-details');
    Route::post('/employee-form/other-details', [EmployeeController::class, 'saveEmployeeOtherDetails'])->name('other-details');

    Route::get('/employee-form/preview', [EmployeeController::class, 'employeeInformationPreview'])->name('preview');
    Route::post('/employee-form/preview', [EmployeeController::class, 'submitEmployeeDetails'])->name('submit-employee');
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
