<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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
    return view('welcome');
});
Route::group([
   'as' => 'teachers.',
    'prefix' => 'teachers',
], function() {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::get('/{task}', [TeacherController::class, 'show'])->name('show');
    Route::get('/{task}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::put('/{task}', [TeacherController::class, 'update'])->name('edit');
    Route::delete('/{task}', [TeacherController::class, 'destroy'])->name('destroy');
});
Route::group([
    'as' => 'registration.',
    'prefix' => 'registration',
], function() {
    Route::get('/', [RegistrationController::class, 'index'])->name('index');
    Route::get('/create', [RegistrationController::class, 'create'])->name('create');
    Route::post('/', [RegistrationController::class, 'store'])->name('store');
    Route::get('/{task}', [RegistrationController::class, 'show'])->name('show');
    Route::get('/{task}/edit', [RegistrationController::class, 'edit'])->name('edit');
    Route::put('/{task}', [RegistrationController::class, 'update'])->name('edit');
    Route::delete('/{task}', [RegistrationController::class, 'destroy'])->name('destroy');
});
Route::group([
    'as' => 'students.',
    'prefix' => 'students',
], function() {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::get('/{task}', [StudentController::class, 'show'])->name('show');
    Route::get('/{task}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::put('/{task}', [StudentController::class, 'update'])->name('edit');
    Route::delete('/{task}', [StudentController::class, 'destroy'])->name('destroy');
});
Route::group([
    'as' => 'reviews.',
    'prefix' => 'reviews',
], function() {
    Route::get('/', [ReviewController::class, 'index'])->name('index');
    Route::get('/create', [ReviewController::class, 'create'])->name('create');
    Route::post('/', [ReviewController::class, 'store'])->name('store');
    Route::get('/{task}', [ReviewController::class, 'show'])->name('show');
    Route::get('/{task}/edit', [ReviewController::class, 'edit'])->name('edit');
    Route::put('/{task}', [ReviewController::class, 'update'])->name('edit');
    Route::delete('/{task}', [ReviewController::class, 'destroy'])->name('destroy');
});
Route::group([
    'as' => 'lessons.',
    'prefix' => 'lessons',
], function() {
    Route::get('/', [LessonController::class, 'index'])->name('index');
    Route::get('/create', [LessonController::class, 'create'])->name('create');
    Route::post('/', [LessonController::class, 'store'])->name('store');
    Route::get('/{task}', [LessonController::class, 'show'])->name('show');
    Route::get('/{task}/edit', [LessonController::class, 'edit'])->name('edit');
    Route::put('/{task}', [LessonController::class, 'update'])->name('edit');
    Route::delete('/{task}', [LessonController::class, 'destroy'])->name('destroy');
});
