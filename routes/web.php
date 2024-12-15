<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SettingController;



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

Route::get('/', function () {return view('welcome');});

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

    Route::get('/orders/add', [OrderController::class, 'add'])->name('orders.list');

    Route::get('/setting/access', [SettingController::class, 'access'])->name('settings.access');
    Route::get('/getRolesForUserType', [SettingController::class, 'getRolesForUserType']);
    Route::get('/getSubRoles', [UserController::class, 'getSubRoles']);


    
});

