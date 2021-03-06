<?php

use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\SubjectController;
use App\Models\Students;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

Route::resource('students',Studentcontroller::class)
->except([
    
]) ;

Route::resource('subjects',SubjectController::class);
