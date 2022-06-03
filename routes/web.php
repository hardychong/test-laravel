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

Route::get('/', function () {
    return view('index');
});

Route::resources([
	'accounts' 		=> App\Http\Controllers\AccountController::class,
	'records' 		=> App\Http\Controllers\RecordController::class,
	'av-actress'	=> App\Http\Controllers\AvActressController::class,
	'av-videos'		=> App\Http\Controllers\AvVideoController::class,
]);

Route::get('/student-form' , [StudentController::class , 'index']);
Route::post('/store-input-fields' , [StudentController::class , 'store']);