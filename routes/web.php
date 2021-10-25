<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeMiddleware;
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

Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/home', [PagesController::class, 'home']);


Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/create', [StudentController::class, 'create']);
Route::get('students/{student}/edit', [StudentController::class, 'edit']);
Route::put('/students/{student}', [StudentController::class, 'update']);

Route::group(['prefix' => 'batches',], function() {
    Route::get('', [BatchController::class, 'index']);
    Route::post('', [BatchController::class, 'store']);
    Route::get('create', [BatchController::class, 'create']);
    Route::get('{batch}/show', [BatchController::class, 'show']);
    Route::get('{batch}/edit', [BatchController::class, 'edit']);
    Route::put('{batch}', [BatchController::class, 'update']);
});
