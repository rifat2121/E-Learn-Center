<?php

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

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/', [App\Http\Controllers\UserController::class, 'welcome']);
Route::get('/adminlogin', [App\Http\Controllers\AdminController::class, 'login']);
Route::post('/valid', [App\Http\Controllers\AdminController::class, 'validation'])->name('validate');
Route::get('/userapps', [App\Http\Controllers\AdminController::class, 'userapps']);


Route::get('/addseminar', [App\Http\Controllers\SeminarController::class, 'create']);
Route::post('/storeseminar', [App\Http\Controllers\SeminarController::class, 'store'])->name('seminar.store');
Route::get('/viewseminar', [App\Http\Controllers\SeminarController::class, 'show']);
Route::get('/editseminar/{id}', [App\Http\Controllers\SeminarController::class, 'edit']);
Route::post('/updateseminar/{seminar}', [App\Http\Controllers\SeminarController::class, 'update'])->name('update-seminar');


Route::get('/addjobs', [App\Http\Controllers\JobController::class, 'create']);
Route::post('/storejobs', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store');
Route::get('/viewjobs', [App\Http\Controllers\JobController::class, 'show']);
Route::get('/deletejobs/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('jobs.delete');


Route::get('/addcourses', [App\Http\Controllers\CoursesController::class, 'create']);
Route::post('/storecourses', [App\Http\Controllers\CoursesController::class, 'store'])->name('store.courses');
Route::get('/viewcourses', [App\Http\Controllers\CoursesController::class, 'show']);
Route::get('/editcourses/{id}', [App\Http\Controllers\CoursesController::class, 'edit']);
Route::post('/updatecourses/{courses}', [App\Http\Controllers\CoursesController::class, 'update'])->name('update-courses');
Route::get('/deletecourses/{id}', [App\Http\Controllers\CoursesController::class, 'destroy']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/userpanel', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/userjobs', [App\Http\Controllers\AppController::class, 'jobs']);
Route::get('/usercourses', [App\Http\Controllers\UserController::class, 'courses']);
Route::get('/userseminars', [App\Http\Controllers\UserController::class, 'seminars']);
Route::get('/applyjobs', [App\Http\Controllers\AppController::class, 'applyjobs'])->name('applyjobs');
Route::post('/applynow', [App\Http\Controllers\AppController::class, 'applynow'])->name('apply.now');

Route::get('/applycourses', [App\Http\Controllers\AppController::class, 'courses'])->name('applycourses');
Route::post('/applycoursesnow', [App\Http\Controllers\AppController::class, 'coursesapply'])->name('apply.course');
Route::get('/myapps', [App\Http\Controllers\UserController::class, 'myapps']);


Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);

Auth::routes();

