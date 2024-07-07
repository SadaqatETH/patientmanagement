<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();


Route::middleware(['auth', 'checkStatus'])->group(function () {


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('dashboard');
    });


    // users
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::put('/update-password', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.updatePassword');

    // Patients
    Route::get('/patients', [App\Http\Controllers\PatientController::class, 'index'])->name('patients.index')->can('View Patient');
    Route::get('/patients/create', [App\Http\Controllers\PatientController::class, 'create'])->name('patient.create')->can('Create Patient');
    Route::post('/patients/create', [App\Http\Controllers\PatientController::class, 'store'])->name('patient.store')->can('Create Patient');
    Route::get('/patients/{patient}', [App\Http\Controllers\PatientController::class, 'show'])->name('patient.show')->can('View Patient');
    Route::get('/patients-edit/{patient}', [App\Http\Controllers\PatientController::class, 'edit'])->name('patient.edit')->can('Edit Patient');
    Route::put('/patients/{patient}/update', [App\Http\Controllers\PatientController::class, 'update'])->name('patient.update')->can('Update Patient');
    Route::delete('/patients/{patient}', [App\Http\Controllers\PatientController::class, 'destroy'])->name('patient.destroy')->can('Delete Patient');


    // filter patients
    Route::get('/filter-patients', [App\Http\Controllers\PatientController::class, 'filter'])->name('patients.filter')->can('View Patient');

});

