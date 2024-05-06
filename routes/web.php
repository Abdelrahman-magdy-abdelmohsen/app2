<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\EmployeeController;
use App\Http\Middleware\test;
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


use App\Http\Controllers\userscontroller;
use App\Http\Controllers\examplecontroller;
Route::get('testing',function (){
    return 'hello';
})->middleware('guest');
Route::get('test',[testcontroller::class,'welcome']);
Route::resource('example',examplecontroller::class);
Route::get('Employees',[Employeecontroller::class,'showEmployees']);

