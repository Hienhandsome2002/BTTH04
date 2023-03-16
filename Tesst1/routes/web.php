<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;


// Route :: get('welcome/{id?}',[\App\Http\Controllers\WelomeController::class,'welcome']);
// Route :: get('greeting/{id}',[\App\Http\Controllers\GreetingController::class,'greeting']);
Route::get('/', function () {
    return view('welcome');
});


Route::resource('students', \App\Http\Controllers\StudentController::class);
;
