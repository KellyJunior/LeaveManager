<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for admin page setting.
/* Route::get('admin', function() {
    return view('admin.footer');
})->name('admin'); */
Route::get('admin',[App\Http\Controllers\UserController::class,'getCurrentUserDetails']);
Route::get('adminAnalytics',[App\Http\Controllers\UserController::class,'totalEmployees']);
Route::get('all-Hod',[App\Http\Controllers\UserController::class,'getHod']);
Route::get('all-Employees',[App\Http\Controllers\UserController::class,'getEmployees']);
Route::get('all-Department',[App\Http\Controllers\DepartmentController::class,'getDepartments']);
Route::get('add-Department', function(){
    return view('admin.addDepartment');
});
/** Get the current logIn user details and customize the dashboard */
/* Route::get('user',function(){
    $user = Auth::user();
        return $user;
}); */



/*get Details about departments of the enterprises  */
Route::get('webDev',[App\Http\Controllers\DepartmentController::class,'webDevDetails']);
Route::get('mobileDev',[App\Http\Controllers\DepartmentController::class,'mobileDevDetails']);
Route::get('management',[App\Http\Controllers\DepartmentController::class,'managementDetails']);
Route::get('ai',[App\Http\Controllers\DepartmentController::class,'aiDepDetails']);

Route::get('myProfile',[App\Http\Controllers\UserController::class,'getCurrentUserProfile']);
