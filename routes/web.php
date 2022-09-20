<?php

use App\Http\Controllers\Hr\DepartmentController;
use App\Http\Controllers\Hr\EmployeeController;
use App\Http\Controllers\Hr\PermissionController;
use App\Http\Controllers\Hr\RoleController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\FloorController;
use App\Http\Controllers\Management\IngredientsController;
use App\Http\Controllers\Management\MainCategoryController;
use App\Http\Controllers\Management\ManagementDashboardController;
use App\Http\Controllers\Management\MenuIngredientsController;
use App\Http\Controllers\Management\MenuListsController;
use App\Http\Controllers\Management\TableListsController;
use App\Http\Controllers\OrderManagement\PosSystemController;
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
    Route::get('get_category_with_main_category/{id}', [CategoryController::class, 'getCategoryWithMainCategory'])->name('get_category_with_main_category');
    Route::resource('menu_list', MenuListsController::class);
    Route::resource('ingredients', IngredientsController::class);
    Route::get('get_ingredient/{id}', [IngredientsController::class, 'getIngredients'])->name('get_ingredient');
    Route::resource('menu_ingredients', MenuIngredientsController::class);
    Route::get('create_menu_ingredient/{id}', [MenuIngredientsController::class, 'createMenuIngredient'])->name('create_menu_ingredient');
    Route::post('store_menu_ingredient', [MenuIngredientsController::class, 'store'])->name('store_menu_ingredient');
    Route::get('get_menu_ingredient/{id}', [MenuIngredientsController::class, 'getMenuIngredient'])->name('get_menu_ingredient');
    Route::get('remove_menu_ingredient/{id}', [MenuIngredientsController::class, 'removeMenuIngredient'])->name('remove_menu_ingredient');
    Route::resource('floor', FloorController::class);
    Route::resource('table_lists', TableListsController::class);

    Route::resource('pos_system', PosSystemController::class);
    Route::get('get_menu_lists', [PosSystemController::class, 'getMenuList'])->name('get_menu_lists');


    Route::resource('employee', EmployeeController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
});
