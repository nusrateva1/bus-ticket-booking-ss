<?php





use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\TicketController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\LocationController;
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
    return view('backend.master');
});


Route::get('/home',[HomeController::class,'home'])->name('frontend.home');



Route::get('/category',[CategoryController::class,'list'])->name('category.list');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/customer',[CustomerController::class,'list'])->name('customer.list');
Route::get('/location',[LocationController::class,'list'])->name('location.list');
Route::get('/driver',[DriverController::class,'list'])->name('driver.list');
Route::get('/booking',[BookingController::class,'list'])->name('booking.list');
Route::get('/ticket',[TicketController::class,'list'])->name('Ticket.list');
Route::post('/ticket/store',[TicketController::class,'store'])->name('Ticket.store');
Route::post('/location/store',[LocationController::class,'store'])->name('location.store');
