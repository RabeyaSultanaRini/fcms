<?php
use App\Http\Controllers\AdminLoginController;
use  App\Http\Controllers\Backend\DashboardController;
use  App\Http\Controllers\Backend\TrainerController;
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


Route::get('/login',[ AdminLoginController::class,'Login'])->name('login');

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/admin/addtrainer',[TrainerController::class,'Addtrainer'])->name('admin.addtrainer');
Route::post('/admin/trainerStore',[TrainerController::class,'TrainerStore'])->name('admin.train.store');
Route::get('/admin/trainerlist',[TrainerController::class,'Trainerlist'])->name('admin.trainer.list');