<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Mail_templateController;
use  App\Http\Controllers\DashboardController;

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
})->middleware('guest');

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
Route::get('unsubscribe/{email}', [MembersController::class, "unsubscribe"]);
Route::get('cancel/{email}', [MembersController::class, "cancelUnsubscription"]);


//back office
Route::get("back", [DashboardController::class, "index"])->middleware('auth');

Route::post("template", [Mail_templateController::class, "store"]);


// Media Handling
Route::post('/media', [MediaController::class, 'store']);

Route::group(['middleware' => ['role:manager']], function () {
    Route::get("test", function () {
        dd("test");
    });
});

Route::put('/role', [UserController::class, "updateRole"]);

Route::post('/sendMail', [MembersController::class, 'sendMail']);
