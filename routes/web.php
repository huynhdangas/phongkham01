<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//admin
Route::get('/add_doctor_view', [AdminController::class,'add_doctor_view']);
Route::post('/upload_doctor', [AdminController::class,'upload_doctor']);
Route::get('/show_appointment', [AdminController::class,'show_appointment']);
Route::get('/approved/{id}', [AdminController::class,'approved']);
Route::get('/canceled/{id}', [AdminController::class,'canceled']);
Route::get('/delete_doctor/{id}', [AdminController::class,'delete_doctor']);
Route::get('/update_doctor/{id}', [AdminController::class,'update_doctor']);
Route::get('/email_view/{id}', [AdminController::class,'email_view']);
Route::post('/edit_doctor/{id}', [AdminController::class,'edit_doctor']);
Route::post('/send_email/{id}', [AdminController::class,'send_email']);
Route::get('/show_doctor', [AdminController::class,'show_doctor']);





//user
Route::post('/appointment', [HomeController::class,'appointment']);
Route::get('/myappointment', [HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);
