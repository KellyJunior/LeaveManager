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
Route::get('admin', function() {
    return view('admin.footer');
})->name('admin');

Route::get('adminAnalytics', function(){
    return view('admin.graphAnalytics');
})->name('adminAnalytics');

Route::get('all-Hod',[App\Http\Controllers\UserController::class,'getHod']);
Route::get('all-Employees',[App\Http\Controllers\UserController::class,'getEmployees']);
Route::get('all-Department',[App\Http\Controllers\DepartmentController::class,'getDepartments']);
 Route::get('add-Department', function(){
    return view('admin.addDepartment');
});



/*get Details about departments of the enterprises */
Route::get('webDev',[App\Http\Controllers\DepartmentController::class,'webDevDetails']);
