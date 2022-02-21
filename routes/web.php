<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Staff\employeeController;
use App\Http\Controllers\Staff\roleController;
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
//staff routes

Route::get('staff/dashboard',[employeeController::class, 'staff_dashboard'])->name('staff-dashboard');
Route::get('staff/employee',[employeeController::class, 'employee'])->name('employees');
Route::get('staff/employee/last/login',[employeeController::class, 'employee_last_login'])->name('employee-last-login');
Route::get('staff/employee/exit',[employeeController::class, 'employee_exit'])->name('employee-exit');
Route::get('staff/expired/documents',[employeeController::class, 'expired_documents'])->name('expired-documents'); 
Route::get('staff/directory',[employeeController::class, 'staff_directory'])->name('staff-directory');
Route::get('staff/profile',[employeeController::class, 'profile'])->name('staff-profile');
Route::post('staff/add-employee',[employeeController::class, 'add_employee'])->name('employee-add');
Route::get('staff/employee/delete/{id}',[employeeController::class, 'delete_employee'])->name('employee-delete');
Route::get('staff/employee/edit/{id}',[employeeController::class, 'edit_employee_form'])->name('employee-edit');
Route::post('staff/employee/update',[employeeController::class, 'update_employee'])->name('employee-update');
//roles and privilages
Route::get('staff/role/privilage',[roleController::class, 'roles_and_privilages'])->name('roles-and-privilages');
Route::post('staff/role/add-role',[roleController::class, 'add_role'])->name('add-role');
Route::get('staff/role-delete/{id}',[roleController::class,'destroy'])->name('role-delete');
Route::get('staff/role-edit-form/{id}',[roleController::class,'edit'])->name('role-edit-form');
Route::post('staff/role-update',[roleController::class,'update'])->name('role-update');
Route::get('/', function () {
    return view('admin.index');
});

Route::get('/dashboard', function(){
    return view('admin.index');
});

Route::get('/login', function(){
    return view('admin.login');
})->name('login');

Route::get('/404', function(){
    return view('admin.404');
})->name('404');

Route::get('/forgot-password', function(){
    return view('admin.forgot-password');
})->name('forgot-password');

Route::get('/tables', function(){
    return view('admin.tables');
})->name('tables');

Route::get('/register', function(){
    return view('admin.register');
})->name('register');

Route::get('/blank', function(){
    return view('admin.blank');
})->name('blank');
