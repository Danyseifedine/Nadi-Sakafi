<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ContentController::class, 'home'])->name('landing');
Route::get('/about_us', [ContentController::class, 'about_us'])->name('about_us');
Route::get('/medical_center', [ContentController::class, 'medical_center'])->name('medical_center');
Route::get('/activities/show', [ContentController::class, 'activities'])->name('all.activities');

Auth::routes(['verify' => true]);


Route::middleware('verified')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // dashboard activity
    Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
    Route::get('/activity/add', [ActivityController::class, 'add_activity'])->name('activity.add');
    Route::post('/activity', [ActivityController::class, 'store'])->name('activity.store');
    Route::get('/activity/{activity}/edit', [ActivityController::class, 'edit'])->name('activity.edit');
    Route::post('/activity/{activity}', [ActivityController::class, 'update'])->name('activity.update');
    Route::delete('/activity/{activity}', [ActivityController::class, 'destroy'])->name('activity.destroy');

    // dashboard activity
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});
