<?php
use App\Http\Controllers\AdminLoginController;
use  App\Http\Controllers\Backend\DashboardController;
use  App\Http\Controllers\Backend\TrainerController;
use  App\Http\Controllers\Backend\ShiftController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\DietController;
use App\Http\Controllers\Backend\EquipmentController;
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
Route::get('/',function(){
    return view('website.master');
});
Route::group(['prefix'=>'admin'],function (){
//Route::get('/login',[ AdminLoginController::class,'Login'])->name('login');

Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//Trainer
Route::get('/addtrainer',[TrainerController::class,'Addtrainer'])->name('admin.addtrainer');
Route::post('/trainerStore',[TrainerController::class,'TrainerStore'])->name('admin.train.store');
Route::get('/trainerlist',[TrainerController::class,'Trainerlist'])->name('admin.trainer.list');



//Member
Route::get('/addmember',[MemberController::class,'Addmember'])->name('admin.addmember');
Route::post('/memberStore',[MemberController::class,'MemberStore'])->name('admin.member.store');
Route::get('/memberlist',[MemberController::class,'Memberlist'])->name('admin.member.list');
//shift
Route::get('/shift',[ShiftController::class,'ShiftAdd'])->name('admin.shift');
Route::post('/shiftStore',[ShiftController::class,'ShiftStore'])->name('admin.shift.store');
Route::get('/ShiftList',[ShiftController::class,'ShiftList'])->name('admin.Shift.list');

//package
Route::get('/addpackage',[PackageController::class,'PackageAdd'])->name('admin.addpackage');
Route::post('/PackageStore',[PackageController::class,'PackageStore'])->name('admin.Package.Store');
Route::get('/PackageList',[PackageController::class,'PackageList'])->name('admin.Package.List');

//Attendance
 Route::get('/addattendance',[AttendanceController::class,'AttendanceAdd'])->name('admin.addattendance');
 Route::post('/AttendanceStore',[AttendanceController::class,'AttendanceStore'])->name('admin.Attendance.Store');
 Route::get('/AttendanceList',[AttendanceController::class,'AttendanceList'])->name('admin.Attendance.List');

 //Diet Plan 
 Route::get('/adddiet',[DietController::class,'AddDiet'])->name('admin.adddiet');
 Route::post('/DietStore',[DietController::class,'DietStore'])->name('admin.Diet.Store');
 Route::get('/DietList',[DietController::class,'DietList'])->name('admin.Diet.List');
 //Equipment
 Route::get('/addequipment',[EquipmentController::class,'AddEquipment'])->name('admin.addequipment');
 Route::post('/EquipmentStore',[EquipmentController::class,'EquipmentStore'])->name('admin.Equipment.Store');
 Route::get('/EquipmentList',[EquipmentController::class,'EquipmentList'])->name('admin.Equipment.List');

 //payment
});