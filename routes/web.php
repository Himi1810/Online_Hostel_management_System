<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Backend\mealController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\controllers\Backend\HostelController;
use App\Http\controllers\Backend\noticeController;
use App\Http\controllers\Backend\reportController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\controllers\Backend\paymentController;
use App\Http\controllers\Backend\StudentController;
use App\Http\controllers\Backend\visitorController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\RequestController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\controllers\Backend\manageroomController;
use App\Http\controllers\Backend\roombookingController;



use App\Http\Controllers\Backend\AdminController as AdminUserController; 










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
Route::get('/login', function () {
    return view('admin.layouts.admin_form');
});

//home
Route::get('home',[HomeController::class,'home'])->name('website.home');


//services
Route::get('service',[ServicesController::class,'services'])->name('website.services');

//aboutus
Route::get('about',[AboutController::class,'about'])->name('website.about');

//contact
Route::get('contact',[ContactController::class,'contact'])->name('website.contact');

//requestform
Route::get('request',[RequestController::class,'request'])->name('website.request');
Route::get('/website/request/form',[RequestController::class,'requestform'])->name('website.form');
Route::post('/request/store',[RequestController::class,'store'])->name('request.store');




//dashboard
// Route::get('/admin',[AdminController::class,'dashboard'])->name('dashboard');

//middleware
// Route::get('/login-admin',[AdminUserController::class,'login'])->name('admin.login');
// Route::post('/do_login',[AdminController::class,'dologin'])->name('do.login');

Route::get('/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/do/login',[AdminController::class,'dologin'])->name('admin.dologin');

Route::group(['prefix'=>'admin'],function (){

    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

    Route::group(['middleware'=>'auth'],function (){
        Route::get('/admin', function (){
            return view('master');
        })->name('admin.home');

        Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');


//hostel
Route::get('/admin/hostel_information/list',[HostelController::class,'hostel_infolist'])->name('admin.hostel_informationlist');
Route::get('/admin/hostel_information/form',[HostelController::class,'hostel_infoform'])->name('admin.hostel_informationform');
Route::post('/hostel/store/info',[HostelController::class,'store'])->name('hostel.store');
Route::get('/admin/hostel_information/view/{id}',[HostelController::class,'hostel_information_view'])->name('admin.hostel_informationview');
Route::get('/admin/hostel_information/delete/{id}',[HostelController::class,'hostel_information_delete'])->name('admin.hostel_informationdelete');
Route::get('/admin/hostel_information/edit/{id}',[HostelController::class,'hostel_information_edit'])->name('admin.hostel_informationedit');
Route::put('/admin/hostel_information/update/{id}',[HostelController::class,'hostel_information_update'])->name('admin.hostel_informationupdate');



//admin
// Route::get('/admin/list',[AdminController::class,'adminlist'])->name('admin.list');
// Route::get('/admin/form',[AdminController::class,'adminform'])->name('admin.form');
// Route::post('/admin/store/info',[AdminController::class,'store'])->name('admin.store');
// Route::get('/admin/view/{id}',[AdminController::class,'admin_view'])->name('admin.view');
// Route::get('/admin/delete/{id}',[AdminController::class,'admin_delete'])->name('admin.delete');

//backendadmin


//Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.hosteladmin');

//student;
Route::get('/admin/student/list',[StudentController::class,'studentlist'])->name('admin.student');
Route::get('/admin/student/form',[StudentController::class,'studentform'])->name('student.form');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/admin/student/view/{id}',[StudentController::class,'student_view'])->name('student.view');
Route::get('/admin/student/delete/{id}',[StudentController::class,'student_delete'])->name('student.delete');
Route::get('/admin/student/edit/{id}',[StudentController::class,'student_edit'])->name('student.edit');
Route::put('/admin/student/update/{id}',[StudentController::class,'student_update'])->name('student.update');




//roombooking
Route::get('/admin/roombooking/list',[RoombookingController::class,'roombookinglist'])->name('admin.roombooking');
Route::get('/admin/roombooking/form',[RoombookingController::class,'roombookingform'])->name('roombooking.form');
Route::post('/roombooking/store',[RoombookingController::class,'store'])->name('roombooking.store');
Route::get('/admin/roombooking/view/{id}',[RoombookingController::class,'roombooking_view'])->name('roombooking.view');
Route::get('/admin/roombooking/delete/{id}',[RoombookingController::class,'roombooking_delete'])->name('roombooking.delete');
Route::get('/admin/roombooking/edit/{id}',[RoombookingController::class,'roombooking_edit'])->name('roombooking.edit');
Route::put('/admin/roombooking/update/{id}',[RoombookingController::class,'roombooking_update'])->name('roombooking.update');




//manageroom
Route::get('/admin/manage-room',[ManageroomController::class,'manageroomlist'])->name('admin.manageroom');
Route::get('/admin/manage-room-form',[ManageroomController::class,'manageroomform'])->name('admin.manageroomform');
Route::post('/manage-room/store',[ManageroomController::class,'store'])->name('manageroom.store');
Route::get('/admin/manageroom/view/{id}',[ManageroomController::class,'manageroom_view'])->name('manageroom.view');
Route::get('/admin/manageroom/delete/{id}',[ManageroomController::class,'manageroom_delete'])->name('manageroom.delete');
Route::get('/admin/manageroom/edit/{id}',[ManageroomController::class,'manageroom_edit'])->name('manageroom.edit');
Route::put('/admin/manageroom/update/{id}',[ManageroomController::class,'mangeroom_update'])->name('manageroom.update');




//meal
Route::get('/admin/meal/list',[MealController::class,'meallist'])->name('admin.meal');
Route::get('/admin/meal/form',[MealController::class,'mealform'])->name('meal.form');
Route::post('/meal/store',[MealController::class,'store'])->name('meal.store');
Route::get('/admin/meal/view/{id}',[MealController::class,'meal_view'])->name('meal.view');
Route::get('/admin/meal/delete/{id}',[MealController::class,'meal_delete'])->name('meal.delete');







//visitor
Route::get('/admin/visitor/list',[VisitorController::class,'visitorlist'])->name('admin.visitor');
Route::get('/admin/visitor/form',[VisitorController::class,'visitorform'])->name('visitor.form');
Route::post('/visitor/store',[VisitorController::class,'store'])->name('visitor.store');
Route::get('/admin/visitor/view/{id}',[VisitorController::class,'visitor_view'])->name('visitor.view');
Route::get('/admin/visitor/delete/{id}',[VisitorController::class,'visitor_delete'])->name('visitor.delete');









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
Route::get('/admin/employee/edit/{id}',[EmployeeController::class,'employee_edit'])->name('employee.edit');
Route::put('/admin/employee/update/{id}',[EmployeeController::class,'employee_update'])->name('employee.update');


// Registration  part
Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/registration/store',[LoginController::class,'store'])->name('registration.store');

Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('login/store',[LoginController::class,'login'])->name('login.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');






//dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

// admin form starts here
// Route::get('/login-admin',[AdminController::class,'login'])->name('admin.login');
// Route::post('/do_login',[AdminController::class,'login'])->name('do.login');
    });
});