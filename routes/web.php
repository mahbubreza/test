<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function (){
//     Route::get('/jobs',  'index');
//     Route::get('/jobs/{job}',  'show');
//     Route::get('/jobs/create',  'create');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}/edit',  'edit');
//     Route::patch('/jobs/{job}',  'update');
//     Route::delete('/jobs/{job}',  'destroy');
// });

Route::resource('jobs', JobController::class);


