<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentsController;

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
Route::post('addMember',[MembersController::class, 'add']);
Route::get('addMember',function(){
   
    return view ('addMember');
});
Route::post('Save',[EventsController::class, 'addData']);
Route::get('Save',function(){
   
    return view ('Save');
});

Route::get('show',[MembersController::class,'showData']);
Route::get('student',function(){
    return view('student');
});
// for add student data
Route::post('student',[StudentsController::class,'addData']);
Route::get('/contact',function(){
    return view ('contact');
});
Route::get('contact',[MembersController::class,'express']);

Route::get('delete/{id}',[MembersController::class,'delete']);
Route::get('edit/{id}',[MembersController::class,'showforUpdate']);
Route::post('edit',[MembersController::class,'update']);
