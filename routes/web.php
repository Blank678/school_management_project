<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//teacher routes
Route::resource("teachers",TeacherController::class);

Route::get("/teachers",[TeacherController::class,"index"]);

//groupe routes
Route::resource("groupes",GroupeController::class);

Route::get("/groupes",[GroupeController::class,"index"]);


Route::resource("students",StudentController::class);

Route::get("/students",[StudentController::class,"index"]);
