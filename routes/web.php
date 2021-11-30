<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\Backend\HostelController;
use App\Http\controllers\Backend\StudentController;
use App\Http\controllers\Backend\StaffController;
use App\Http\controllers\Backend\roombookingController;
use App\Http\controllers\Backend\manageroomController;
use App\Http\controllers\Backend\mealController;
use App\Http\controllers\Backend\visitorController;
use App\Http\controllers\Backend\paymentController;
use App\Http\controllers\Backend\noticeController;
use App\Http\controllers\Backend\reportController;









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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin',[AdminController::class,'hostel']);
Route::get('/admin/hostel_information',[HostelController::class,'hostel_info'])->name('admin.hostel_information');
Route::get('/admin/admin_create',[AdminController::class,'admin_create'])->name('admin.create');
Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');


Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.hosteladmin');
Route::get('/admin/student',[StudentController::class,'student'])->name('admin.student');


Route::get('/admin/staff',[StaffController::class,'staff'])->name('admin.staff');
Route::get('/admin/staff/form',[StaffController::class,'staffform'])->name('admin.staff.form');





Route::get('/admin/roombooking',[RoombookingController::class,'roombooking'])->name('admin.roombooking');
Route::get('/admin/manageroom',[ManageroomController::class,'manageroom'])->name('admin.manageroom');
Route::get('/admin/meal',[MealController::class,'meal'])->name('admin.meal');
Route::get('/admin/visitor',[VisitorController::class,'visitor'])->name('admin.visitor');
Route::get('/admin/payment',[PaymentController::class,'payment'])->name('admin.payment');
Route::get('/admin/notice',[noticeController::class,'notice'])->name('admin.notice');
Route::get('/admin/report',[reportController::class,'report'])->name('admin.report');

Route::post('/hostelinformation/store',[HostelController::class,'store'])->name('hostelinformation.store');
Route::get('/admin/hostel',[HostelController::class,'hostel'])->name('admin.hostel');



