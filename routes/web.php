<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\Mail_templateController;

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

Route::get('/', function () {
    return view('front_office.home');
});

// authentication
Route::get("register", [RegisterController::class, 'create'])
    ->middleware('guest');
Route::post("register", [RegisterController::class, 'store']);
Route::post('logout', [LogoutController::class, 'destroy'])
    ->middleware('auth');
Route::get("login", [LoginController::class, 'create'])
    ->middleware('guest');
Route::post("login", [LoginController::class, 'authenticate'])->name("login");


Route::post('/request', [ForgotPasswordLinkController::class, 'store']);
Route::get('/request', [ForgotPasswordLinkController::class, 'create']);
Route::post('/reset', [ForgotPasswordController::class, 'reset']);
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');

// members handling
Route::post("members", [MembersController::class, "store"]);
Route::get('/members', [MembersController::class, "index"])
    ->middleware('auth');

//back office
Route::get("back", function () {
    return view("back_office.dashboard");
})->middleware('auth');

Route::post("template", [Mail_templateController::class, "store"]);

