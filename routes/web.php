<?php

use App\Http\Controllers\facultyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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
    return view('app');
});


Route::get('/addstudent', [PageController::class,"add"]);
Route::get('/students', [PageController::class,"students"]);
Route::post('/create', [PageController::class,"create"]);
Route::get('/student/{id}', [PageController::class,"edit"]);
Route::put('/student/{id}', [PageController::class,"update"]);
Route::delete('/student/{id}', [PageController::class,"delete"]);
Route::resource('faculty',facultyController::class);

