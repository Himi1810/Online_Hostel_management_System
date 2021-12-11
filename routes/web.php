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
//hostel
Route::get('/admin/hostel_information/list',[HostelController::class,'hostel_infolist'])->name('admin.hostel_informationlist');
Route::get('/admin/hostel_information/form',[HostelController::class,'hostel_infoform'])->name('admin.hostel_informationform');
Route::post('/hostel/store/info',[HostelController::class,'store'])->name('hostel.store');



//admin
Route::get('/admin/list',[AdminController::class,'adminlist'])->name('admin.list');
Route::get('/admin/form',[AdminController::class,'adminform'])->name('admin.form');
Route::post('/admin/store/info',[AdminController::class,'store'])->name('admin.store');


//Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.hosteladmin');

//student
Route::get('/admin/student/list',[StudentController::class,'studentlist'])->name('admin.student');
Route::get('/admin/student/form',[StudentController::class,'studentform'])->name('student.form');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');


//roombooking
Route::get('/admin/roombooking/list',[RoombookingController::class,'roombookinglist'])->name('admin.roombooking');
Route::get('/admin/roombooking/form',[RoombookingController::class,'roombookingform'])->name('roombooking.form');
Route::post('/roombooking/store',[RoombookingController::class,'store'])->name('roombooking.store');





//manageroom
Route::get('/admin/manage-room',[ManageroomController::class,'manageroomlist'])->name('admin.manageroom');
Route::get('/admin/manage-room-form',[ManageroomController::class,'manageroomform'])->name('admin.manageroomform');
Route::post('/manage-room/store',[ManageroomController::class,'store'])->name('manageroom.store');




//meal
Route::get('/admin/meal/list',[MealController::class,'meallist'])->name('admin.meal');
Route::get('/admin/meal/form',[MealController::class,'mealform'])->name('meal.form');
Route::post('/meal/store',[MealController::class,'store'])->name('meal.store');






//visitor
Route::get('/admin/visitor/list',[VisitorController::class,'visitorlist'])->name('admin.visitor');
Route::get('/admin/visitor/form',[VisitorController::class,'visitorform'])->name('visitor.form');
Route::post('/visitor/store',[VisitorController::class,'store'])->name('visitor.store');









//payment
Route::get('/admin/payment/list',[PaymentController::class,'paymentlist'])->name('admin.payment');
Route::get('/admin/payment/form',[PaymentController::class,'paymentform'])->name('payment.form');
Route::post('/payment/store',[PaymentController::class,'store'])->name('payment.store');





//notice
Route::get('/admin/notice/list',[noticeController::class,'noticelist'])->name('admin.notice');
Route::get('/admin/notice/form',[noticeController::class,'noticeform'])->name('notice.form');
Route::post('/notice/store',[NoticeController::class,'store'])->name('notice.store');






//report
Route::get('/admin/report',[reportController::class,'report'])->name('admin.report');

//Route::post('/hostelinformation/store',[HostelController::class,'store'])->name('hostelinformation.store');
//Route::get('/admin/hostel',[HostelController::class,'hostel'])->name('admin.hostel');

// employee
Route::get('/admin/employee/list',[EmployeeController::class,'employeelist'])->name('admin.employee');
Route::get('/admin/employee/form',[EmployeeController::class,'employeeform'])->name('employee.form');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
