<?php

use App\Http\Controllers\Conponents\InvoicePdfController;
use App\Http\Controllers\Counter\CompletedCounterOrderController;
use App\Http\Controllers\Counter\CounterDashboardController;
use App\Http\Controllers\Counter\CustomerListsController;
use App\Http\Controllers\Counter\OrdersController;
use App\Http\Controllers\General\CounterController;
use App\Http\Controllers\General\OrderInfoDownloadController;
use App\Http\Controllers\General\OrderItemController;
use App\Http\Controllers\Manager\BillController;
use App\Http\Controllers\Manager\CompletedOrderController;
use App\Http\Controllers\Manager\OrderListController;
use App\Http\Controllers\Manager\TableManagementController;

use App\Http\Controllers\Hr\DepartmentController;
use App\Http\Controllers\Hr\EmployeeController;
use App\Http\Controllers\Hr\PermissionController;
use App\Http\Controllers\Hr\RoleController;
use App\Http\Controllers\Kitchen\AllOrderDoneController;
use App\Http\Controllers\Kitchen\KitchenDashboardController;
use App\Http\Controllers\Kitchen\OrderDoneController;
use App\Http\Controllers\Kitchen\OrderPreparationController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\FloorController;
use App\Http\Controllers\Management\IngredientsController;
use App\Http\Controllers\Management\MainCategoryController;
use App\Http\Controllers\Management\ManagementDashboardController;
use App\Http\Controllers\Management\MenuIngredientsController;
use App\Http\Controllers\Management\MenuListsController;
use App\Http\Controllers\Management\TableIconController;
use App\Http\Controllers\Management\TableListsController;
use App\Http\Controllers\Manager\CurrentOrderController;
use App\Http\Controllers\Manager\ManagerDashboardController;
use App\Http\Controllers\OrderInfo\OrderInfoController;
use App\Http\Controllers\OrderManagement\CustomerController;
use App\Http\Controllers\OrderManagement\OrderConfirmController;
use App\Http\Controllers\OrderManagement\PosSystemController;
use App\Http\Controllers\OrderManagement\TemporaryOrderItemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Management 
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
    Route::get('get_by_floor_category/{id}', [TableListsController::class, 'getByFloorCategory'])->name('get_by_floor_category');
    Route::resource('table_icon', TableIconController::class);


    // POS System 
    Route::resource('pos_system', PosSystemController::class);
    Route::get('get_menu_lists', [PosSystemController::class, 'getMenuList'])->name('get_menu_lists');
    Route::get('search_menu_lists_by_category', [PosSystemController::class, 'getSearchByCategory'])->name('search_menu_lists_by_category');

    Route::resource('temporary_order_item', TemporaryOrderItemController::class);
    Route::post('store_temporary_order_item', [TemporaryOrderItemController::class, 'store'])->name('store_temporary_order_item');
    Route::get('get_temporary_order_item', [TemporaryOrderItemController::class, 'index'])->name('get_temporary_order_item');
    Route::get('remove_temporary_order_item/{id}', [TemporaryOrderItemController::class, 'removeTemporaryOrderItem'])->name('remove_temporary_order_item');
    Route::get('qty_minus_temporary_order_item/{id}', [TemporaryOrderItemController::class, 'qtyMinusTemporaryOrderItem'])->name('qty_minus_temporary_order_item');
    Route::get('get_order_note_temporary_order_item/{id}', [TemporaryOrderItemController::class, 'getOrderNoteTemporaryOrderItem'])->name('get_order_note_temporary_order_item');
    Route::post('add_order_note_temporary_order_item', [TemporaryOrderItemController::class, 'addOrderNoteTemporaryOrderItem'])->name('add_order_note_temporary_order_item');

    Route::resource('customer', CustomerController::class);
    Route::get('get_customer', [CustomerController::class, 'index'])->name('get_customer');
    Route::post('store_customer', [CustomerController::class, 'store'])->name('store_customer');

    Route::resource('order_confirm', OrderConfirmController::class);
    Route::post('store_order_confirm', [OrderConfirmController::class, 'store'])->name('store_order_confirm');
    Route::get('get_on_goind_order', [OrderPreparationController::class, 'getOnGoingOrder'])->name('get_on_goind_order');



    // Manager 
    Route::resource('manager_dashboard', ManagerDashboardController::class);
    Route::resource('manager_current_order', CurrentOrderController::class);
    Route::get('get_manager_current_order', [CurrentOrderController::class, 'getManagerCurrentOrder'])->name('get_manager_current_order');


    Route::resource('order_lists', OrderListController::class);
    Route::get('get_order_info', [OrderListController::class, 'getOrderInfo'])->name('get_order_info');
    Route::get('show_order_info/{id}', [OrderListController::class, 'show'])->name('show_order_info');

    Route::resource('bill_info', BillController::class);
    Route::post('store_bill_info', [BillController::class, 'store'])->name('store_bill_info');

    Route::resource('completed_order', CompletedOrderController::class);
    Route::get('get_completed_order_info', [CompletedOrderController::class, 'getOrderInfo'])->name('get_completed_order_info');
    Route::get('completed_show_order_info/{id}', [CompletedOrderController::class, 'show'])->name('completed_show_order_info');
    Route::resource('table_management', TableManagementController::class);
    Route::get('get_current_table/{id}', [TableManagementController::class, 'getCurrentTable'])->name('get_current_table');
    Route::post('submit_change_new_table', [TableManagementController::class, 'submitChangeNewTable'])->name('submit_change_new_table');



    // Counter 
    Route::resource('counter_dashboard', CounterDashboardController::class);
    Route::resource('counter_order', OrdersController::class);
    Route::get('get_counter_order', [OrdersController::class, 'getCounterOrderInfo'])->name('get_counter_order');
    Route::get('counter_order_info_items/{id}', [OrdersController::class, 'show'])->name('counter_order_info_items');
    Route::resource('counter_completed_order', CompletedCounterOrderController::class);
    Route::resource('counter_customer_lists', CustomerListsController::class);


    // Order Procress 
    Route::get('get_order_info_finished', [OrderInfoController::class, 'getOrderInfoFinished'])->name('get_order_info_finished');
    Route::get('get_invoice_order_info_finished/{id}', [OrderInfoController::class, 'InvoiceOrderInfoFinished'])->name('get_invoice_order_info_finished');


    // Kitchen 
    Route::resource('kitchen_dashboard', KitchenDashboardController::class);
    Route::resource('order_preparation', OrderPreparationController::class);
    Route::get('get_order_info_preparation', [OrderPreparationController::class, 'getOrderInfoPreparation'])->name('get_order_info_preparation');

    Route::post('update_order_preparation_status', [OrderPreparationController::class, 'updateOrderPreparationStatus'])->name('update_order_preparation_status');
    Route::post('update_all_item_status', [OrderPreparationController::class, 'updateAllItemStatus'])->name('update_all_item_status');

    Route::resource('order_done', OrderDoneController::class);
    Route::get('get_order_info_done', [OrderDoneController::class, 'getOrderInfoDone'])->name('get_order_info_done');
    Route::resource('all_order_done', AllOrderDoneController::class);



    // General 
    Route::resource('counter', CounterController::class);
    Route::get('get_counter', [CounterController::class, 'index'])->name('get_counter');
    Route::get('update_manager_remark', [OrderItemController::class, 'updateManagerRemark'])->name('update_manager_remark');
    Route::get('manager_current_order_pdf', [OrderItemController::class, 'getManagerCurrentOrderPdf'])->name('manager_current_order_pdf');
    Route::get('get_kitchen_order_preparation_pdf', [OrderItemController::class, 'getKitchenOrderPreparationPdf'])->name('get_kitchen_order_preparation_pdf');
    Route::get('get_kitchen_order_preparation_excel', [OrderItemController::class, 'getKitchenOrderPreparationExcel'])->name('get_kitchen_order_preparation_excel');
    Route::get('get_kitchen_order_done_pdf', [OrderItemController::class, 'getKitchenOrderDonePdf'])->name('get_kitchen_order_done_pdf');
    Route::get('get_kitchen_order_done_excel', [OrderItemController::class, 'getKitchenOrderDoneExcel'])->name('get_kitchen_order_done_excel');
    Route::get('get_kitchen_order_all_done_pdf', [OrderItemController::class, 'getKitchenOrderAllDonePdf'])->name('get_kitchen_order_all_done_pdf');
    Route::get('get_kitchen_order_all_done_excel', [OrderItemController::class, 'getKitchenAllOrderDoneExcel'])->name('get_kitchen_order_all_done_excel');

    Route::get('manager_current_order_excel', [OrderItemController::class, 'getManagerCurrentOrderExcel'])->name('manager_current_order_excel');
    Route::get('manager_order_lists_pdf', [OrderInfoDownloadController::class, 'ManagerOrderListsPdf'])->name('manager_order_lists_pdf');
    Route::get('manager_order_lists_excel', [OrderInfoDownloadController::class, 'ManagerOrderListsExcel'])->name('manager_order_lists_excel');



    // Conponents 
    Route::get('invoice_pdf_download/{id}', [InvoicePdfController::class, 'InvoicePDFDownload'])->name('invoice_pdf_download');



    // HR 
    Route::resource('employee', EmployeeController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
});
