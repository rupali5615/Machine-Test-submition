<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AuthController;
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

Route::view('answer','answer');

Route::get('questions', [App\Http\Controllers\QuizController::class, 'display']);

Route::view('start','start');

// Route::get('login',[App\Http\Controllers\LoginController::class,'index']);
// Route::post('login1', [App\Http\Controllers\LoginController::class,'checklogin']);
// //Route::post('login1', 'LoginController@checklogin');

Route::view('end','end');

Route::view('add','addque');
Route::post('addque', [App\Http\Controllers\QuizController::class, 'add']);
Route::get('startquiz', [App\Http\Controllers\QuizController::class, 'start']);
Route::post('save', [App\Http\Controllers\QuizController::class, 'save']);


//Route::any('addque','QuestionController@add');

Route::get('login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
