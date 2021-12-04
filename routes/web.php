<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\Backend\HostelController;
use App\Http\controllers\Backend\StudentController;
use App\Http\controllers\Backend\roombookingController;
use App\Http\controllers\Backend\manageroomController;
use App\Http\controllers\Backend\mealController;
use App\Http\controllers\Backend\visitorController;
use App\Http\controllers\Backend\paymentController;
use App\Http\controllers\Backend\noticeController;
use App\Http\controllers\Backend\reportController;
use App\Http\Controllers\Backend\EmployeeController;









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
Route::get('/admin',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/admin/hostel_information',[HostelController::class,'hostel_info'])->name('admin.hostel_information');

//admin
Route::get('/admin/list',[AdminController::class,'adminlist'])->name('admin.admin');
Route::get('/admin/form',[AdminController::class,'adminform'])->name('admin.form');
Route::post('/admin/store/info',[AdminController::class,'store'])->name('admin.store');


//Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.hosteladmin');

//student
Route::get('/admin/student/list',[StudentController::class,'studentlist'])->name('admin.student');
Route::get('/admin/student/form',[StudentController::class,'studentform'])->name('student.form');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');











Route::get('/admin/roombooking',[RoombookingController::class,'roombooking'])->name('admin.roombooking');
Route::get('/admin/manageroom',[ManageroomController::class,'manageroom'])->name('admin.manageroom');
Route::get('/admin/meal',[MealController::class,'meal'])->name('admin.meal');
Route::get('/admin/visitor',[VisitorController::class,'visitor'])->name('admin.visitor');
Route::get('/admin/payment',[PaymentController::class,'payment'])->name('admin.payment');
Route::get('/admin/notice',[noticeController::class,'notice'])->name('admin.notice');
Route::get('/admin/report',[reportController::class,'report'])->name('admin.report');

Route::post('/hostelinformation/store',[HostelController::class,'store'])->name('hostelinformation.store');
Route::get('/admin/hostel',[HostelController::class,'hostel'])->name('admin.hostel');

// employee
Route::get('/admin/employee/list',[EmployeeController::class,'employeelist'])->name('admin.employee');
Route::get('/admin/employee/form',[EmployeeController::class,'employeeform'])->name('employee.form');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
