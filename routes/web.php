<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/prendre-rendez-vous', [AppointmentController::class, 'start'])->name('appointment.start');
Route::get('/prendre-rendez-vous/1', [AppointmentController::class, 'stepOne'])->name('appointment.step-one');
Route::post('/prendre-rendez-vous/1', [AppointmentController::class, 'stepOneSubmit'])->name('appointment.step-one-submit');
Route::get('/prendre-rendez-vous/2', [AppointmentController::class, 'stepTwo'])->name('appointment.step-two');
Route::post('/prendre-rendez-vous/2', [AppointmentController::class, 'stepTwoSubmit'])->name('appointment.step-two-submit');
Route::get('/prendre-rendez-vous/3', [AppointmentController::class, 'stepThree'])->name('appointment.step-three');
Route::post('/prendre-rendez-vous/3', [AppointmentController::class, 'stepThreeSubmit'])->name('appointment.step-three-submit');
Route::get('/prendre-rendez-vous/4', [AppointmentController::class, 'stepFour'])->name('appointment.step-four');
Route::post('/prendre-rendez-vous/4', [AppointmentController::class, 'stepFourSubmit'])->name('appointment.step-four-submit');
Route::get('/prendre-rendez-vous/5', [AppointmentController::class, 'stepFive'])->name('appointment.step-five');
Route::post('/prendre-rendez-vous/5', [AppointmentController::class, 'stepFiveSubmit'])->name('appointment.step-five-submit');
Route::get('/prendre-rendez-vous/6', [AppointmentController::class, 'stepSix'])->name('appointment.step-six');
Route::post('/prendre-rendez-vous/6', [AppointmentController::class, 'stepSixSubmit'])->name('appointment.step-six-submit');
Route::get('/prendre-rendez-vous/7', [AppointmentController::class, 'stepSeven'])->name('appointment.step-seven');
Route::post('/prendre-rendez-vous/7', [AppointmentController::class, 'stepSevenSubmit'])->name('appointment.step-seven-submit');
Route::get('/merci-pour-votre-demande', [AppointmentController::class, 'stop'])->name('appointment.stop');

Route::get('/mes-rendez-vous', [AppointmentController::class, 'index'])->middleware(['auth', 'verified'])->name('appointment.index');
Route::get('/mes-rendez-vous/{id}', [AppointmentController::class, 'show'])->middleware(['auth', 'verified'])->name('appointment.show');
Route::delete('/mes-rendez-vous/delete/{id}', [AppointmentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('appointment.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
