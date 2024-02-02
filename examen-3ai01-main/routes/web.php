<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Remy Jonathan
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/step', [StepController::class, 'index'])->name('step1');
Route::get('/step2', [StepController::class, 'step2'])->name('step2');
Route::get('/step3', [StepController::class, 'step3'])->name('step3');
Route::get('/step4', [StepController::class, 'step4'])->name('step4');
Route::get('/step5', [StepController::class, 'step5'])->name('step5');
Route::get('/step6', [StepController::class, 'step6'])->name('step6');
Route::get('/step7', [StepController::class, 'step7'])->name('step7');
// Route::get('/step8', [StepController::class, 'step8'])->name('step8');
Route::get('/step9', [StepController::class, 'step9'])->name('step9');
Route::get('/step10', [StepController::class, 'step10'])->name('step10');
