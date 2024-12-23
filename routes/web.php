<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ContractController;




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
    return view('welcome'); });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/add-users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/create', [UserController::class, 'addUser'])->name('users.addUser');
    Route::get('/users/list', [UserController::class, 'list'])->name('users.list');


    Route::post('/add-customers', [CustomerController::class, 'add'])->name('customers.add');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::get('/customers/list', [CustomerController::class, 'list'])->name('customers.list');


    Route::get('/orders/step1', [OrderController::class, 'createStep1'])->name('orders.create.step1');
    Route::post('/orders/step1', [OrderController::class, 'postStep1'])->name('orders.post.step1');
    Route::get('/orders/step2', [OrderController::class, 'createStep2'])->name('orders.create.step2');
    Route::post('/orders/step2', [OrderController::class, 'postStep2'])->name('orders.post.step2');
    Route::get('/orders/step3', [OrderController::class, 'createStep3'])->name('orders.create.step3');
    Route::post('/orders/step3', [OrderController::class, 'postStep3'])->name('orders.post.step3');
    Route::get('/orders/step4', [OrderController::class, 'createStep4'])->name('orders.create.step4');
    Route::post('/orders/step4', [OrderController::class, 'postStep4'])->name('orders.post.step4');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');



    Route::get('/permissions', [PermissionController::class, 'showForm'])->name('permissions.form');
    Route::get('/permissions/sub-roles', [PermissionController::class, 'getSubRoles'])->name('permissions.subRoles');
    Route::get('/permissions/access-options', [PermissionController::class, 'getAccessOptions'])->name('permissions.accessOptions');
    Route::post('/permissions/save', [PermissionController::class, 'savePermissions'])->name('permissions.save');


    Route::get('/getSubRoles', [UserController::class, 'getSubRoles']);

    Route::get('/contract/{orderId}', [ContractController::class, 'generateContract'])->name('contract.generate');
    Route::get('/contract/list-contract', [ContractController::class, 'ListcContract'])->name('contracts.ListcContract');
    Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
    Route::get('/contracts/create/{order_id}', [ContractController::class, 'create'])->name('contracts.create');
    Route::post('/contracts/store/{order_id}', [ContractController::class, 'store'])->name('contracts.store');
    Route::get('/contracts/download/{id}', [ContractController::class, 'download'])->name('contracts.download');





});

