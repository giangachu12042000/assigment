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

// ->only(); chỉ dùng hàm nào đó, except (create,edit)

// *subject

Route::resource('subjects',SubjectController::class);

// collection mảng gồm các object 
// Route::get('/student/lis',function(){
//     $students = DB::table('students')->orderBy('id','desc')->get();
//     return view('students.list',['students' => $students]);
// })->name('student-list'); 

// Route::get('/login',function(){
//     return view('login');
// })->name('get-login');

// Route::post('/post-login',function(Request $request){

// $username = $request->name;
//     $students = DB::table('students')
//             ->where('name', 'like', "%$username%")
//             ->first();
//     if($students){
//         return redirect()->route('student-list');
//     }else{
//         return redirect()->route('get-login');
//     }
// })->name('post-login');