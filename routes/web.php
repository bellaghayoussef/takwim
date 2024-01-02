<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EvaluationsController;
use App\Http\Controllers\RolesController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'users',
], function () {
    Route::get('/', [UsersController::class, 'index'])
         ->name('users.user.index');
    Route::get('/create', [UsersController::class, 'create'])
         ->name('users.user.create');
    Route::get('/show/{user}',[UsersController::class, 'show'])
         ->name('users.user.show');
    Route::get('/{user}/edit',[UsersController::class, 'edit'])
         ->name('users.user.edit');
    Route::post('/', [UsersController::class, 'store'])
         ->name('users.user.store');
    Route::put('user/{user}', [UsersController::class, 'update'])
         ->name('users.user.update');
    Route::delete('/user/{user}',[UsersController::class, 'destroy'])
         ->name('users.user.destroy');
});

Route::group([
    'prefix' => 'evaluations',
], function () {
    Route::get('/', [EvaluationsController::class, 'index'])
         ->name('evaluations.evaluation.index');
    Route::get('/create', [EvaluationsController::class, 'create'])
         ->name('evaluations.evaluation.create');
    Route::get('/show/{evaluation}',[EvaluationsController::class, 'show'])
         ->name('evaluations.evaluation.show')->where('id', '[0-9]+');
    Route::get('/{evaluation}/edit',[EvaluationsController::class, 'edit'])
         ->name('evaluations.evaluation.edit')->where('id', '[0-9]+');
    Route::post('/', [EvaluationsController::class, 'store'])
         ->name('evaluations.evaluation.store');
    Route::put('evaluation/{evaluation}', [EvaluationsController::class, 'update'])
         ->name('evaluations.evaluation.update')->where('id', '[0-9]+');
    Route::delete('/evaluation/{evaluation}',[EvaluationsController::class, 'destroy'])
         ->name('evaluations.evaluation.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'roles',
], function () {
    Route::get('/', [RolesController::class, 'index'])
         ->name('roles.roles.index');
    Route::get('/create', [RolesController::class, 'create'])
         ->name('roles.roles.create');
    Route::get('/show/{roles}',[RolesController::class, 'show'])
         ->name('roles.roles.show');
    Route::get('/{roles}/edit',[RolesController::class, 'edit'])
         ->name('roles.roles.edit');
    Route::post('/', [RolesController::class, 'store'])
         ->name('roles.roles.store');
    Route::put('roles/{roles}', [RolesController::class, 'update'])
         ->name('roles.roles.update');
    Route::delete('/roles/{roles}',[RolesController::class, 'destroy'])
         ->name('roles.roles.destroy');
});
