<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PatientController::class,'index'])->name('patient.show');
Route::get('/patient/create',[PatientController::class,'create_identity'])->name('patient.create');
Route::post('/patient/create',[PatientController::class,'store'])->name('patient.store');

// Session
Route::get('/patient/session',[PatientController::class,'create_session'])->name('session');


Route::get('/patient/create-contact',[PatientController::class,'create_contact'])->name('patient-contact.create');
Route::get('/patient/create-choice',[PatientController::class,'create_choice'])->name('patient-choice.create');
Route::get('/patient/create-employer',[PatientController::class,'create_employer'])->name('patient-employer.create');
Route::get('/patient/create-stats',[PatientController::class,'create_stats'])->name('patient-stats.create');
Route::get('/patient/create-guardian',[PatientController::class,'create_guardian'])->name('patient-guardian.create');
Route::get('/patient/create-primary',[PatientController::class,'create_primary_insurance'])->name('patient-primary.create');
Route::get('/patient/create-secondary',[PatientController::class,'create_secondary_insurance'])->name('patient-secondary.create');
Route::get('/patient/create-tertiary',[PatientController::class,'create_tertiary_insurance'])->name('patient-tertiary.create');
