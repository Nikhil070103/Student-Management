<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('teachers',function(){
//     return Teachers::all();
// });

Route::get('teachers',[TeachersController::class, 'index']);
Route::get('added',[TeachersController::class, 'add']);
Route::get('read/{id}',[TeachersController::class, 'show']);
Route::get('update/{id}',[TeachersController::class, 'update']);
Route::get('delete/{id}',[TeachersController::class, 'delete']);
Route::get('adddata',[StudentController::class, 'addData']);
Route::get('getdata',[StudentController::class, 'getData']);
Route::get('updatedata',[StudentController::class, 'updataData']);
// Route::get('/', function () {
//     return 'Hi';
// });

// Route::get('about', function(){
//     return 'Abt us';
// });


// Route::prefix('details')->group(function() {
//     Route::get('students', function(){
//         return 'this is Students';
//     });

//     Route::get('teachers', function(){
//         return 'this is Teachers';
//     });
// });

// Route::get('student/{id}/{reg}', function($id, $reg){
//     return 'student number' . $id . 'reg no.' . $reg ;
// });

// Route::get('about-us/{name}/{id}', function($name, $id ){
//     // $name = "Nikhil Agarwal";
//     // $email= "nikhil@gmail.com";
//     // return view('aboutus')->with('name', $name)->with('email', $email);
//     //    return view('aboutus', compact('name','email'));  
//     return view('aboutus', compact('name', 'id'));
//     });

// Route::get('contact-us/{name}/{id}', function($name, $id){


//     return view('contactus', compact('name', 'id'));
// });

// // Route::get('students',[StudentController::class,'index']);
// // Route::get('about-us',[StudentController::class,'aboutus']);

// Route::controller(StudentController::class)->group(function(){
//     Route::get('students','index');
//     Route::get('about-us','aboutus');
// });