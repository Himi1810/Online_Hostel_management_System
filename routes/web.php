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
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;

use App\Http\Controllers\Backend\DashboardController;










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
    return view('website.pages.home');
});

//services
Route::get('service',[ServicesController::class,'services'])->name('website.services');

//aboutus
Route::get('about',[AboutController::class,'about'])->name('website.about');

//contact
Route::get('contact',[ContactController::class,'contact'])->name('website.contact');



//dashboard
Route::get('/admin',[AdminController::class,'dashboard'])->name('dashboard');

//hostel
Route::get('/admin/hostel_information/list',[HostelController::class,'hostel_infolist'])->name('admin.hostel_informationlist');
Route::get('/admin/hostel_information/form',[HostelController::class,'hostel_infoform'])->name('admin.hostel_informationform');
Route::post('/hostel/store/info',[HostelController::class,'store'])->name('hostel.store');
Route::get('/admin/hostel_information/view/{id}',[HostelController::class,'hostel_information_view'])->name('admin.hostel_informationview');
Route::get('/admin/hostel_information/delete/{id}',[HostelController::class,'hostel_information_delete'])->name('admin.hostel_informationdelete');




//admin
Route::get('/admin/list',[AdminController::class,'adminlist'])->name('admin.list');
Route::get('/admin/form',[AdminController::class,'adminform'])->name('admin.form');
Route::post('/admin/store/info',[AdminController::class,'store'])->name('admin.store');
Route::get('/admin/view/{id}',[AdminController::class,'admin_view'])->name('admin.view');
Route::get('/admin/delete/{id}',[AdminController::class,'admin_delete'])->name('admin.delete');



//Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.hosteladmin');

//student
Route::get('/admin/student/list',[StudentController::class,'studentlist'])->name('admin.student');
Route::get('/admin/student/form',[StudentController::class,'studentform'])->name('student.form');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/admin/student/view/{id}',[StudentController::class,'student_view'])->name('student.view');
Route::get('/admin/student/delete/{id}',[StudentController::class,'student_delete'])->name('student.delete');



//roombooking
Route::get('/admin/roombooking/list',[RoombookingController::class,'roombookinglist'])->name('admin.roombooking');
Route::get('/admin/roombooking/form',[RoombookingController::class,'roombookingform'])->name('roombooking.form');
Route::post('/roombooking/store',[RoombookingController::class,'store'])->name('roombooking.store');
Route::get('/admin/roombooking/view/{id}',[RoombookingController::class,'roombooking_view'])->name('roombooking.view');
Route::get('/admin/roombooking/delete/{id}',[RoombookingController::class,'roombooking_delete'])->name('roombooking.delete');





//manageroom
Route::get('/admin/manage-room',[ManageroomController::class,'manageroomlist'])->name('admin.manageroom');
Route::get('/admin/manage-room-form',[ManageroomController::class,'manageroomform'])->name('admin.manageroomform');
Route::post('/manage-room/store',[ManageroomController::class,'store'])->name('manageroom.store');
Route::get('/admin/manageroom/view/{id}',[ManageroomController::class,'manageroom_view'])->name('manageroom.view');
Route::get('/admin/manageroom/delete/{id}',[ManageroomController::class,'manageroom_delete'])->name('manageroom.delete');




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
Route::get('/admin/payment/view/{id}',[PaymentController::class,'payment_view'])->name('payment.view');





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
Route::get('/admin/employee/view/{id}',[EmployeeController::class,'employee_view'])->name('employee.view');
Route::get('/admin/employee/delete/{id}',[EmployeeController::class,'employee_delete'])->name('employee.delete');



// website part
Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/registration/store',[LoginController::class,'store'])->name('registration.store');

Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('login/store',[LoginController::class,'dologin'])->name('login.dologin');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');



//dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

