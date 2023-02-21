<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeachingplanController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Models\Teaching_plan;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::get('/register', [UserController::class, 'register']);
Route::post('/registration', [UserController::class, 'registration'])->name('registration');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/subject', [SubjectController::class, 'subject'] )->name('subject');
Route::post('/subject/submit', [SubjectController::class, 'subjectsubmit'])->name('subjectsubmit');

Route::get('/teachingplan', [TeachingplanController::class, 'tplan'])->name('tplan');
Route::post('/save/submit', [TeachingplanController::class, 'save'])->name('save');

Route::get('/tplans', [TeachingplanController::class, 'view'])->name('viewtplans');

Route::post('/activate/{tplan}', [TeachingplanController::class, 'activate'])->name('activate');
Route::post('/comment/{tplan}', [TeachingplanController::class, 'comment'])->name('comment');
Route::get('/teaching', [TeachingplanController::class, 'viewtplan'])->name('viewtplan');
Route::get('tplan/{id}/edit', [TeachingplanController::class, 'edit'])->name('edit');
Route::put('tplan/{tplan}/update', [TeachingplanController::class, 'update'])->name('update');

Route::get('/add-teacher', [AdminController::class, 'teachers'])->name('teacher');
Route::get('/view-staff', [AdminController::class, 'staffs'])->name('staffs');

Route::get('/teachers', [AdminController::class, 'teacher'])->name('teachers');

Route::get('/staff', [AdminController::class, 'staff'])->name('staff');
Route::post('/role/{user}', [AdminController::class, 'role'])->name('role');
Route::get('/principal', [TeachingplanController::class, 'principal'])->name('principal');
Route::get('/return', [AdminController::class, 'return'])->name('return');