<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ApartmentOwnerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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

//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'verify']);

//Logout
Route::get('/logout', [LogoutController::class, 'index']);

Route::group(['middleware' => 'Admin'], function () {
    //Admin
    Route::get('/Admin/Dashboard', [AdminController::class, 'index'])->name('Admin.Dashboard');
    Route::get('/Admin/Create', [AdminController::class, 'create'])->name('Admin.Create');
    Route::post('/Admin/Create', [AdminController::class, 'storeAdmin']);
    Route::get('/Admin/All', [AdminController::class, 'show'])->name('Admin.All');
    Route::get('Admin/Edit/{ID}', [AdminController::class, 'edit'])->name('Admin.Edit');
    Route::post('Admin/Edit/{ID}', [AdminController::class, 'update']);
    Route::get('Admin/Delete/{ID}', [AdminController::class, 'delete'])->name('Admin.Delete');
    Route::get('Admin/Details/{ID}', [AdminController::class, 'details'])->name('Admin.Details');
    Route::get('Admin/MyProfile', [AdminController::class, 'profile']);
    Route::get('Admin/ChangePassword', [AdminController::class, 'changePassword'])->name('Admin.changePassword');
    Route::post('Admin/ChangePassword', [AdminController::class, 'storePassword']);
    Route::get('Admin/Block/{ID}', [AdminController::class, 'block'])->name('Admin.Block');
    Route::get('/Admin/BlockedUser', [AdminController::class, 'blockUser'])->name('Admin.BlockedUser');

    Route::get('/ApartmentOwner/All', [ApartmentOwnerController::class, 'show'])->name('ApartmentOwner.All');
    Route::get('ApartmentOwner/Edit/{ID}', [ApartmentOwnerController::class, 'edit'])->name('ApartmentOwner.Edit');
    Route::post('ApartmentOwner/Edit/{ID}', [ApartmentOwnerController::class, 'update']);
    Route::get('ApartmentOwner/Delete/{ID}', [ApartmentOwnerController::class, 'delete'])->name('ApartmentOwner.Delete');
    Route::get('ApartmentOwner/Details/{ID}', [ApartmentOwnerController::class, 'details'])->name('ApartmentOwner.Details');
    Route::get('ApartmentOwner/Block/{ID}', [ApartmentOwnerController::class, 'block'])->name('ApartmentOwner.Block');
    Route::get('/ApartmentOwner/BlockedUser', [ApartmentOwnerController::class, 'blockUser'])->name('ApartmentOwner.BlockedUser');  


    Route::get('/Apartment/All', [ApartmentController::class, 'show'])->name('Apartment.All');
    Route::get('/Admin/BlockedApartment', [ApartmentController::class, 'blockAll'])->name('Apartment.blockAll');
    Route::get('/Admin/Apartment/Blocked/{ID}', [ApartmentController::class, 'block'])->name('Apartment.Block');
    Route::get('/Apartment/Details/{ID}', [ApartmentController::class, 'details'])->name('Apartment.Details');

    Route::get('/Customer/All', [CustomerController::class, 'show'])->name('Customer.All');

});
