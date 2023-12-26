<?php

// routes/web.php

use App\Http\Controllers\AudiCarsController;
use App\Http\Controllers\BmwCarsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MercedesCarsController;
use App\Http\Controllers\PorscheCarsController;
use App\Http\Controllers\PurchaseController;
use App\Models\usersModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showContact']);

// Authenticated routes
Route::get('/purchase', [PurchaseController::class, 'showPurchase'])->name('purchase')->middleware('auth');
Route::post('/purchase', [PurchaseController::class, 'processPurchase'])->name('purchase.process')->middleware('auth');
Route::get('/purchase/success', function () {
    return view('purchase.success');
})->name('purchase.success')->middleware('auth');

Route::get('/cars', [CarsController::class, 'showCars'])->middleware('auth');
Route::get('/porsche-cars', [PorscheCarsController::class, 'showPorscheCars'])->middleware('auth');
Route::get('/mercedes-cars', [MercedesCarsController::class, 'showMercedesCars'])->middleware('auth');
Route::get('/audi-cars', [AudiCarsController::class, 'showAudiCars'])->middleware('auth');
Route::get('/bmw-cars', [BmwCarsController::class, 'showBmwCars'])->middleware('auth');

// Authentication routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'showImages']);

