<?php

use App\Http\Controllers\Hr\DepartmentController;
use App\Http\Controllers\Hr\EmployeeController;
use App\Http\Controllers\Hr\PermissionController;
use App\Http\Controllers\Hr\RoleController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\MainCategoryController;
use App\Http\Controllers\Management\ManagementDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('management_dashboard', ManagementDashboardController::class);
    Route::resource('main_category', MainCategoryController::class);
    Route::resource('category', CategoryController::class);









    Route::resource('employee', EmployeeController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
});
