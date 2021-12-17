<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ApartmentOwnerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\Frontend\homeController;
use App\Http\Controllers\Frontend\frontloginController;
use App\Http\Controllers\Frontend\profileUserController;
use App\Http\Controllers\Frontend\cusLoginController;
use App\Http\Controllers\Seller\sellerController;
use App\Http\Controllers\Seller\sellerLoginController;










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

Auth::routes();

//Login
Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'verify']);

//Logout
Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/contact', [homeController::class, 'contact']);
Route::get('/about-us', [homeController::class, 'aboutUs']);

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
    Route::get('search', [AdminController::class, 'search']);
    Route::get('Admin/ChangePassword', [AdminController::class, 'changePassword'])->name('Admin.changePassword');
    Route::post('Admin/ChangePassword', [AdminController::class, 'storePassword']);
    Route::get('Admin/Block/{ID}', [AdminController::class, 'block'])->name('Admin.Block');
    Route::get('/Admin/BlockedUser', [AdminController::class, 'blockUser'])->name('Admin.BlockedUser');
    Route::get('/Admin/footer', [AdminController::class, 'footer'])->name('Admin.footer');
    Route::post('/Admin/footer', [AdminController::class, 'storeFooter']);
    Route::get('/Admin/recent', [AdminController::class, 'recent']);
    Route::get('/Admin/last_week', [AdminController::class, 'last_week']);
    Route::get('/Admin/last_month', [AdminController::class, 'last_month']);

    //Apartment Owner or Seller
    Route::get('/ApartmentOwner/All', [ApartmentOwnerController::class, 'show'])->name('ApartmentOwner.All');
    Route::get('ApartmentOwner/Edit/{ID}', [ApartmentOwnerController::class, 'edit'])->name('ApartmentOwner.Edit');
    Route::post('ApartmentOwner/Edit/{ID}', [ApartmentOwnerController::class, 'update']);
    Route::get('ApartmentOwner/Delete/{ID}', [ApartmentOwnerController::class, 'delete'])->name('ApartmentOwner.Delete');
    Route::get('ApartmentOwner/Details/{ID}', [ApartmentOwnerController::class, 'details'])->name('ApartmentOwner.Details');
    Route::get('ApartmentOwner/Block/{ID}', [ApartmentOwnerController::class, 'block'])->name('ApartmentOwner.Block');
    Route::get('/ApartmentOwner/BlockedUser', [ApartmentOwnerController::class, 'blockUser'])->name('Owner.BlockedUser');
    Route::get('/ApartmentOwner/recent', [ApartmentOwnerController::class, 'recent']);
    Route::get('/ApartmentOwner/last_week', [ApartmentOwnerController::class, 'last_week']);
    Route::get('/ApartmentOwner/last_month', [ApartmentOwnerController::class, 'last_month']);
    Route::get('/ApartmentOwner/BlockedUser', [ApartmentOwnerController::class, 'blockUser']);

    //Apartments
    Route::get('/Apartment/recent', [ApartmentController::class, 'recent']);
    Route::get('/Apartment/last_week', [ApartmentController::class, 'last_week']);
    Route::get('/Apartment/last_month', [ApartmentController::class, 'last_month']);
    Route::get('/Apartment/All', [ApartmentController::class, 'show'])->name('Apartment.All');
    Route::get('/Admin/BlockedApartment', [ApartmentController::class, 'blockAll'])->name('Apartment.blockAll');
    Route::get('/Admin/Apartment/Blocked/{ID}', [ApartmentController::class, 'block'])->name('Apartment.Block');
    Route::get('/Apartment/Details/{ID}', [ApartmentController::class, 'details'])->name('Apartment.Details');

    //Customer
    Route::get('/Customer/All', [CustomerController::class, 'show'])->name('Customer.All');
    Route::get('Customer/Edit/{ID}', [CustomerController::class, 'edit'])->name('Customer.Edit');
    Route::post('Customer/Edit/{ID}', [CustomerController::class, 'update']);
    Route::get('Customer/Block/{ID}', [CustomerController::class, 'block'])->name('Customer.Block');
    Route::get('Customer/Delete/{ID}', [CustomerController::class, 'delete'])->name('Customer.Delete');
    Route::get('/Customer/recent', [CustomerController::class, 'recent']);
    Route::get('/Customer/last_week', [CustomerController::class, 'last_week']);
    Route::get('/Customer/last_month', [CustomerController::class, 'last_month']);
    Route::get('/Customer/BlockedUser', [CustomerController::class, 'blockUser']);

    //Managers
    Route::get('/Manager/Create', [ManagerController::class, 'create'])->name('Manager.Create');
    Route::post('/Manager/Create', [ManagerController::class, 'storeManager']);
    Route::get('/Manager/All', [ManagerController::class, 'show'])->name('Manager.All');
});



// Frontend Route start here %%%%%%%%%%%%%%%%%%%%%%%%%-----------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/customer/login', [cusLoginController::class, 'index'])->name('customer.login');
Route::post('/login', [cusLoginController::class, 'login'])->name('customer-login');
Route::get('/customer/register', [frontloginController::class, 'register'])->name('register');
Route::post('/storeregister', [frontloginController::class, 'registerStore'])->name('store.customer');


Route::prefix('customer')->middleware('auth:customer')->group(function () {
    Route::get('/profile', [profileUserController::class, 'profile'])->name('profile');

    Route::post('/update', [profileUserController::class, 'updateProfile'])->name('update.Customer');

    Route::get('/logout', [cusLoginController::class, 'logout'])->name('customer-logout');
});


//Seller Route Start&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&______________________________
Route::prefix('Seller')->group(function () {

    Route::get('/login', [sellerLoginController::class, 'index'])->name('seller.login');
    Route::get('/register', [sellerController::class, 'Register'])->name('seller.signup');
    Route::post('/login', [sellerLoginController::class, 'login'])->name('seller_login');

    Route::post('/store', [sellerController::class, 'registerStore'])->name('store.seller');

    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard', [sellerController::class, 'dashboard'])->name('seller.dashboard');


        Route::get('/logout', [sellerLoginController::class, 'logout'])->name('seller-logout');
        Route::get('/sell', [homeController::class, 'sell'])->name('sell');
    });
});
