<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

Route::get('/', [\App\Http\Controllers\Taskscontroller::class,'index']);

Route::get('/Tasks', [\App\Http\Controllers\Taskscontroller::class,'index']);

Route::get('/Tasks/create',[\App\Http\Controllers\Taskscontroller::class,'create']);

Route::post('/Tasks',[\App\Http\Controllers\Taskscontroller::class,'store']);

Route::patch('Tasks/{id}',[\App\Http\Controllers\Taskscontroller::class,'update']);
