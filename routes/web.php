<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/', [HomeController::class, 'index'])->name('after.login');


/* sign */
Route::get('/login', [SignController::class, 'login'])->name('login');
Route::post('/signin', [SignController::class, 'createSignin'])->name('signin.custom');

Route::get('/register', [SignController::class, 'create'])->name('register');
Route::post('/create-user', [SignController::class, 'store'])->name('user.regis');

Route::get('/logout', [SignController::class, 'logout'])->name('logout');


/* user */
Route::get('/index', [SignController::class, 'show'])->name('index')->middleware('auth');


// profile->edit->update
Route::get('/profile', [UserController::class, 'profileView'])->name('profile')->middleware('auth');
Route::get('/editProfile/{id}', [UserController::class, 'edit'])->name('edit.profile')->middleware('auth');
// Route::post('/updateProfile/{id}',[UserController::class, 'updateProfile'])->name('update.profile');
Route::post('/updateProfile/{id}', [UserController::class, 'update'])->name('update.profile');

/* admin */
Route::get('/home', [AdminController::class, 'index'])->name('home');
/* course */
Route::get('/list', [CourseController::class, 'index'])->name('list');
Route::get('/insert', [CourseController::class, 'create'])->name('insert');
Route::post('/create-coruse', [CourseController::class, 'store'])->name('course.custom');

// edit
Route::get('/editCourse/{id}', [CourseController::class, 'edit'])->name('edit.course');
Route::post('/updateCourse/{id}', [CourseController::class, 'update'])->name('update.course');

// delete
Route::get('/deleteHome/{id}', [AdminController::class, 'destroy'])->name('delete.home');


