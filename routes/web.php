<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ParticipantController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


route::get('/Trainer',[TrainerController::class,'index']);
route::get('/Trainer/create',[TrainerController::class,'create']);
route::post('/Trainer/store',[TrainerController::class,'store']);
route::get('/Trainer/{id}/edit',[TrainerController::class,'edit']);
route::put('/Trainer/{id}',[TrainerController::class,'update']);
route::delete('/Trainer/{id}',[TrainerController::class,'destroy']);

route::get('/Car',[CarController::class,'index']);
route::get('/Car/create',[CarController::class,'create']);
route::post('/Car/store',[CarController::class,'store']);
route::get('/Car/{id}/edit',[CarController::class,'edit']);
route::put('/Car/{id}',[CarController::class,'update']);
route::delete('/Car/{id}',[CarController::class,'destroy']);

route::get('/Participant',[ParticipantController::class,'index']);
route::get('/Participant/create',[ParticipantController::class,'create']);
route::post('/Participant/store',[ParticipantController::class,'store']);
route::get('/Participant/{id}/edit',[ParticipantController::class,'edit']);
route::put('/Participant/{id}',[ParticipantController::class,'update']);
route::delete('/Participant/{id}',[ParticipantController::class,'destroy']);



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
